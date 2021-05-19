<?php

declare (strict_types=1);
namespace Ssch\TYPO3Rector\Rector\v9\v0;

use PhpParser\Node;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\String_;
use Rector\Core\Rector\AbstractRector;
use Ssch\TYPO3Rector\Helper\FilesFinder;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
use Symplify\SmartFileSystem\SmartFileInfo;
/**
 * @changelog https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.0/Important-82692-GuidelinesForExtensionFiles.html
 * @see \Ssch\TYPO3Rector\Tests\Rector\v9\v0\ReplaceExtKeyWithExtensionKeyRector\ReplaceExtKeyWithExtensionKeyRectorTest
 */
final class ReplaceExtKeyWithExtensionKeyRector extends \Rector\Core\Rector\AbstractRector
{
    /**
     * @var \Ssch\TYPO3Rector\Helper\FilesFinder
     */
    private $filesFinder;
    public function __construct(\Ssch\TYPO3Rector\Helper\FilesFinder $filesFinder)
    {
        $this->filesFinder = $filesFinder;
    }
    /**
     * @codeCoverageIgnore
     */
    public function getRuleDefinition() : \Symplify\RuleDocGenerator\ValueObject\RuleDefinition
    {
        return new \Symplify\RuleDocGenerator\ValueObject\RuleDefinition('Replace $_EXTKEY with extension key', [new \Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample(<<<'CODE_SAMPLE'
ExtensionUtility::configurePlugin(
    'Foo.'.$_EXTKEY,
    'ArticleTeaser',
    [
        'FooBar' => 'baz',
    ]
);
CODE_SAMPLE
, <<<'CODE_SAMPLE'
ExtensionUtility::configurePlugin(
    'Foo.'.'bar',
    'ArticleTeaser',
    [
        'FooBar' => 'baz',
    ]
);
CODE_SAMPLE
)]);
    }
    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes() : array
    {
        return [\PhpParser\Node\Expr\Variable::class];
    }
    /**
     * @param \PhpParser\Node $node
     */
    public function refactor($node) : ?\PhpParser\Node
    {
        $fileInfo = $this->file->getSmartFileInfo();
        if ($this->filesFinder->isExtEmconf($fileInfo)) {
            return null;
        }
        if (!$this->isExtensionKeyVariable($node)) {
            return null;
        }
        $extEmConf = $this->createExtensionKeyFromFolder($fileInfo);
        if (null === $extEmConf) {
            return null;
        }
        $extensionKey = \basename($extEmConf->getRealPathDirectory());
        return new \PhpParser\Node\Scalar\String_($extensionKey);
    }
    private function isExtensionKeyVariable(\PhpParser\Node\Expr\Variable $variable) : bool
    {
        return $this->isName($variable, '_EXTKEY');
    }
    private function createExtensionKeyFromFolder(\Symplify\SmartFileSystem\SmartFileInfo $fileInfo) : ?\Symplify\SmartFileSystem\SmartFileInfo
    {
        return $this->filesFinder->findExtEmConfRelativeFromGivenFileInfo($fileInfo);
    }
}
