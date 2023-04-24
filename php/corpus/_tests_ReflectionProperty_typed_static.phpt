<?php

class Test {
    public static int $x = 42;
    public static int $y;
    public static $z;
}

$rp = new ReflectionProperty('Test', 'x');
var_dump($rp->getValue());

$rp = new ReflectionProperty('Test', 'y');
try {
    var_dump($rp->getValue());
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

$rp->setValue("24");
var_dump($rp->getValue());

try {
    $rp->setValue("foo");
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
var_dump($rp->getValue());

Test::$z =& Test::$y;

$rp = new ReflectionProperty('Test', 'z');
try {
    $rp->setValue("foo");
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
var_dump($rp->getValue());


