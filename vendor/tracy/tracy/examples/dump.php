<?php

declare (strict_types=1);
namespace RectorPrefix20220104;

require __DIR__ . '/../src/tracy.php';
use RectorPrefix20220104\Tracy\Debugger;
// For security reasons, Tracy is visible only on localhost.
// You may force Tracy to run in development mode by passing the Debugger::DEVELOPMENT instead of Debugger::DETECT.
\RectorPrefix20220104\Tracy\Debugger::enable(\RectorPrefix20220104\Tracy\Debugger::DETECT, __DIR__ . '/log');
?>
<!DOCTYPE html><link rel="stylesheet" href="assets/style.css">

<h1>Tracy: dump() demo</h1>

<?php 
echo "<h2>Basic Types</h2>\n";
\RectorPrefix20220104\dump('any string', 123, [\true, \false, null]);
echo "<h2>Dark Mode</h2>\n";
\RectorPrefix20220104\Tracy\Debugger::$dumpTheme = 'dark';
\RectorPrefix20220104\dump('any string');
echo "<h2>Objects</h2>\n";
echo "<p>Hover over the name <code>\$baz</code> to see property declaring class and over the hash <code>#5</code> to see same objects.</p>\n";
class ParentClass
{
    public $foo = [10, 20];
    protected $bar = 30;
    private $baz = 'parent';
}
\class_alias('RectorPrefix20220104\\ParentClass', 'ParentClass', \false);
class ChildClass extends \RectorPrefix20220104\ParentClass
{
    private $baz = 'child';
}
\class_alias('RectorPrefix20220104\\ChildClass', 'ChildClass', \false);
$obj = new \RectorPrefix20220104\ChildClass();
$obj->dynamic = 'hello';
$obj->selfReference = $obj;
\RectorPrefix20220104\dump($obj);
echo "<h2>Strings</h2>\n";
echo "<p>Hover over the string to see length.</p>\n";
$arr = ['single line' => 'hello', 'binary' => "binary string", 'multi line' => "first\r\nsecond\nthird\n   indented line", 'long' => \str_repeat('tracy ', 1000)];
\RectorPrefix20220104\dump($arr);
echo "<h2>References and Recursion</h2>\n";
echo "<p>Hover over the reference <code>&1</code> to see referenced values.</p>\n";
$arr = ['first', 'second', 'third'];
$arr[] =& $arr[0];
$arr[] =& $arr[1];
$arr[] =& $arr;
\RectorPrefix20220104\dump($arr);
echo "<h2>Special Types</h2>\n";
$arr = [\fopen(__FILE__, 'r'), new class
{
}, function ($x, $y) use(&$arr, $obj) {
}];
\RectorPrefix20220104\dump($arr);
if (\RectorPrefix20220104\Tracy\Debugger::$productionMode) {
    echo '<p><b>For security reasons, Tracy is visible only on localhost. Look into the source code to see how to enable Tracy.</b></p>';
}
