<?php

abstract class Test {
    abstract static function foo();
}

$rm = new ReflectionMethod('Test', 'foo');
try {
    var_dump($rm->invoke(null));
} catch (ReflectionException $e) {
    echo $e->getMessage(), "\n";
}

