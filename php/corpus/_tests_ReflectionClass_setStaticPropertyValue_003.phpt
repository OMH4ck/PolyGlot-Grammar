<?php

class Test {
    public static $x;
    public static int $y = 2;
}

$rc = new ReflectionClass('Test');

try {
    $rc->setStaticPropertyValue("y", "foo");
} catch (TypeError $e) { echo $e->getMessage(), "\n"; }
var_dump(Test::$y);

$rc->setStaticPropertyValue("y", "21");
var_dump(Test::$y);


Test::$x =& Test::$y;

try {
    $rc->setStaticPropertyValue("x", "foo");
} catch (TypeError $e) { echo $e->getMessage(), "\n"; }
var_dump(Test::$y);

$rc->setStaticPropertyValue("x", "42");
var_dump(Test::$y);

