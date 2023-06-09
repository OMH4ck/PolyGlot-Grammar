<?php

/** Correct docblock */
function foo(
    /** wrong docblock */
    $arg
) {
}

class Foo {
    /** Correct docblock */
    public function bar(
        /** wrong docblock */
        $arg
    ) {

    }
}

/** Correct docblock */
$func = function(
    /** wrong docblock */
    $arg
) {
};

/** Correct docblock */
$func2 = fn(
    /** wrong docblock */
    $arg
) => null;

$reflectionFunction = new ReflectionFunction('foo');
$reflectionClass = new ReflectionClass(Foo::class);
$reflectionClosure = new ReflectionFunction($func);
$reflectionArrowFn = new ReflectionFunction($func2);

echo $reflectionFunction->getDocComment() . PHP_EOL;
echo $reflectionClass->getMethod('bar')->getDocComment() . PHP_EOL;
echo $reflectionClosure->getDocComment() . PHP_EOL;
echo $reflectionArrowFn->getDocComment() . PHP_EOL;

echo "Done\n";
