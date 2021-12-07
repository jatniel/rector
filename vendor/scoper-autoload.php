<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('GenerateChangelogCommand', false) && !interface_exists('GenerateChangelogCommand', false) && !trait_exists('GenerateChangelogCommand', false)) {
    spl_autoload_call('RectorPrefix20211207\GenerateChangelogCommand');
}
if (!class_exists('AutoloadIncluder', false) && !interface_exists('AutoloadIncluder', false) && !trait_exists('AutoloadIncluder', false)) {
    spl_autoload_call('RectorPrefix20211207\AutoloadIncluder');
}
if (!class_exists('ComposerAutoloaderInit4d5c6bb436c3e2e4b1a2ebf6c5018bf1', false) && !interface_exists('ComposerAutoloaderInit4d5c6bb436c3e2e4b1a2ebf6c5018bf1', false) && !trait_exists('ComposerAutoloaderInit4d5c6bb436c3e2e4b1a2ebf6c5018bf1', false)) {
    spl_autoload_call('RectorPrefix20211207\ComposerAutoloaderInit4d5c6bb436c3e2e4b1a2ebf6c5018bf1');
}
if (!class_exists('Helmich\TypoScriptParser\Parser\AST\Statement', false) && !interface_exists('Helmich\TypoScriptParser\Parser\AST\Statement', false) && !trait_exists('Helmich\TypoScriptParser\Parser\AST\Statement', false)) {
    spl_autoload_call('RectorPrefix20211207\Helmich\TypoScriptParser\Parser\AST\Statement');
}
if (!class_exists('Helmich\TypoScriptParser\Parser\Traverser\Traverser', false) && !interface_exists('Helmich\TypoScriptParser\Parser\Traverser\Traverser', false) && !trait_exists('Helmich\TypoScriptParser\Parser\Traverser\Traverser', false)) {
    spl_autoload_call('RectorPrefix20211207\Helmich\TypoScriptParser\Parser\Traverser\Traverser');
}
if (!class_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !interface_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !trait_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false)) {
    spl_autoload_call('RectorPrefix20211207\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator');
}
if (!class_exists('Normalizer', false) && !interface_exists('Normalizer', false) && !trait_exists('Normalizer', false)) {
    spl_autoload_call('RectorPrefix20211207\Normalizer');
}
if (!class_exists('JsonException', false) && !interface_exists('JsonException', false) && !trait_exists('JsonException', false)) {
    spl_autoload_call('RectorPrefix20211207\JsonException');
}
if (!class_exists('Attribute', false) && !interface_exists('Attribute', false) && !trait_exists('Attribute', false)) {
    spl_autoload_call('RectorPrefix20211207\Attribute');
}
if (!class_exists('Stringable', false) && !interface_exists('Stringable', false) && !trait_exists('Stringable', false)) {
    spl_autoload_call('RectorPrefix20211207\Stringable');
}
if (!class_exists('UnhandledMatchError', false) && !interface_exists('UnhandledMatchError', false) && !trait_exists('UnhandledMatchError', false)) {
    spl_autoload_call('RectorPrefix20211207\UnhandledMatchError');
}
if (!class_exists('ValueError', false) && !interface_exists('ValueError', false) && !trait_exists('ValueError', false)) {
    spl_autoload_call('RectorPrefix20211207\ValueError');
}
if (!class_exists('ReturnTypeWillChange', false) && !interface_exists('ReturnTypeWillChange', false) && !trait_exists('ReturnTypeWillChange', false)) {
    spl_autoload_call('RectorPrefix20211207\ReturnTypeWillChange');
}
if (!class_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false) && !interface_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false) && !trait_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false)) {
    spl_autoload_call('RectorPrefix20211207\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson');
}
if (!class_exists('Symplify\SmartFileSystem\SmartFileInfo', false) && !interface_exists('Symplify\SmartFileSystem\SmartFileInfo', false) && !trait_exists('Symplify\SmartFileSystem\SmartFileInfo', false)) {
    spl_autoload_call('RectorPrefix20211207\Symplify\SmartFileSystem\SmartFileInfo');
}
if (!class_exists('Test', false) && !interface_exists('Test', false) && !trait_exists('Test', false)) {
    spl_autoload_call('RectorPrefix20211207\Test');
}
if (!class_exists('ParentClass', false) && !interface_exists('ParentClass', false) && !trait_exists('ParentClass', false)) {
    spl_autoload_call('RectorPrefix20211207\ParentClass');
}
if (!class_exists('ChildClass', false) && !interface_exists('ChildClass', false) && !trait_exists('ChildClass', false)) {
    spl_autoload_call('RectorPrefix20211207\ChildClass');
}
if (!class_exists('DemoClass', false) && !interface_exists('DemoClass', false) && !trait_exists('DemoClass', false)) {
    spl_autoload_call('RectorPrefix20211207\DemoClass');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('dn')) {
    function dn() {
        return \RectorPrefix20211207\dn(...func_get_args());
    }
}
if (!function_exists('dump_node')) {
    function dump_node() {
        return \RectorPrefix20211207\dump_node(...func_get_args());
    }
}
if (!function_exists('print_node')) {
    function print_node() {
        return \RectorPrefix20211207\print_node(...func_get_args());
    }
}
if (!function_exists('composerRequire4d5c6bb436c3e2e4b1a2ebf6c5018bf1')) {
    function composerRequire4d5c6bb436c3e2e4b1a2ebf6c5018bf1() {
        return \RectorPrefix20211207\composerRequire4d5c6bb436c3e2e4b1a2ebf6c5018bf1(...func_get_args());
    }
}
if (!function_exists('scanPath')) {
    function scanPath() {
        return \RectorPrefix20211207\scanPath(...func_get_args());
    }
}
if (!function_exists('lintFile')) {
    function lintFile() {
        return \RectorPrefix20211207\lintFile(...func_get_args());
    }
}
if (!function_exists('parseArgs')) {
    function parseArgs() {
        return \RectorPrefix20211207\parseArgs(...func_get_args());
    }
}
if (!function_exists('showHelp')) {
    function showHelp() {
        return \RectorPrefix20211207\showHelp(...func_get_args());
    }
}
if (!function_exists('formatErrorMessage')) {
    function formatErrorMessage() {
        return \RectorPrefix20211207\formatErrorMessage(...func_get_args());
    }
}
if (!function_exists('preprocessGrammar')) {
    function preprocessGrammar() {
        return \RectorPrefix20211207\preprocessGrammar(...func_get_args());
    }
}
if (!function_exists('resolveNodes')) {
    function resolveNodes() {
        return \RectorPrefix20211207\resolveNodes(...func_get_args());
    }
}
if (!function_exists('resolveMacros')) {
    function resolveMacros() {
        return \RectorPrefix20211207\resolveMacros(...func_get_args());
    }
}
if (!function_exists('resolveStackAccess')) {
    function resolveStackAccess() {
        return \RectorPrefix20211207\resolveStackAccess(...func_get_args());
    }
}
if (!function_exists('magicSplit')) {
    function magicSplit() {
        return \RectorPrefix20211207\magicSplit(...func_get_args());
    }
}
if (!function_exists('assertArgs')) {
    function assertArgs() {
        return \RectorPrefix20211207\assertArgs(...func_get_args());
    }
}
if (!function_exists('removeTrailingWhitespace')) {
    function removeTrailingWhitespace() {
        return \RectorPrefix20211207\removeTrailingWhitespace(...func_get_args());
    }
}
if (!function_exists('regex')) {
    function regex() {
        return \RectorPrefix20211207\regex(...func_get_args());
    }
}
if (!function_exists('execCmd')) {
    function execCmd() {
        return \RectorPrefix20211207\execCmd(...func_get_args());
    }
}
if (!function_exists('ensureDirExists')) {
    function ensureDirExists() {
        return \RectorPrefix20211207\ensureDirExists(...func_get_args());
    }
}
if (!function_exists('uv_signal_init')) {
    function uv_signal_init() {
        return \RectorPrefix20211207\uv_signal_init(...func_get_args());
    }
}
if (!function_exists('uv_signal_start')) {
    function uv_signal_start() {
        return \RectorPrefix20211207\uv_signal_start(...func_get_args());
    }
}
if (!function_exists('uv_poll_init_socket')) {
    function uv_poll_init_socket() {
        return \RectorPrefix20211207\uv_poll_init_socket(...func_get_args());
    }
}
if (!function_exists('setproctitle')) {
    function setproctitle() {
        return \RectorPrefix20211207\setproctitle(...func_get_args());
    }
}
if (!function_exists('trigger_deprecation')) {
    function trigger_deprecation() {
        return \RectorPrefix20211207\trigger_deprecation(...func_get_args());
    }
}
if (!function_exists('array_is_list')) {
    function array_is_list() {
        return \RectorPrefix20211207\array_is_list(...func_get_args());
    }
}
if (!function_exists('enum_exists')) {
    function enum_exists() {
        return \RectorPrefix20211207\enum_exists(...func_get_args());
    }
}
if (!function_exists('includeIfExists')) {
    function includeIfExists() {
        return \RectorPrefix20211207\includeIfExists(...func_get_args());
    }
}
if (!function_exists('bdump')) {
    function bdump() {
        return \RectorPrefix20211207\bdump(...func_get_args());
    }
}
if (!function_exists('this_is_fatal_error')) {
    function this_is_fatal_error() {
        return \RectorPrefix20211207\this_is_fatal_error(...func_get_args());
    }
}
if (!function_exists('dump')) {
    function dump() {
        return \RectorPrefix20211207\dump(...func_get_args());
    }
}
if (!function_exists('demo')) {
    function demo() {
        return \RectorPrefix20211207\demo(...func_get_args());
    }
}
if (!function_exists('first')) {
    function first() {
        return \RectorPrefix20211207\first(...func_get_args());
    }
}
if (!function_exists('second')) {
    function second() {
        return \RectorPrefix20211207\second(...func_get_args());
    }
}
if (!function_exists('third')) {
    function third() {
        return \RectorPrefix20211207\third(...func_get_args());
    }
}
if (!function_exists('foo')) {
    function foo() {
        return \RectorPrefix20211207\foo(...func_get_args());
    }
}
if (!function_exists('head')) {
    function head() {
        return \RectorPrefix20211207\head(...func_get_args());
    }
}
if (!function_exists('dumpe')) {
    function dumpe() {
        return \RectorPrefix20211207\dumpe(...func_get_args());
    }
}
if (!function_exists('compressJs')) {
    function compressJs() {
        return \RectorPrefix20211207\compressJs(...func_get_args());
    }
}
if (!function_exists('compressCss')) {
    function compressCss() {
        return \RectorPrefix20211207\compressCss(...func_get_args());
    }
}

return $loader;
