<?php

class Test {
    public X|Y|Z|int $prop;
    public function method(X|Y|Z|int $arg): X|Y|Z|int {
        return $arg;
    }
}

// Check that nothing here triggers autoloading.
spl_autoload_register(function($class) {
    echo "Loading $class\n";
});

$test = new Test;

$test->prop = 42;
var_dump($test->prop);
var_dump($test->method(42));

$test->prop = "42";
var_dump($test->prop);
var_dump($test->method("42"));

try {
    $test->prop = new stdClass;
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
    $test->method(new stdClass);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

if (true) {
    class X {}
}

$test->prop = new X;
var_dump($test->prop);
var_dump($test->method(new X));

if (true) {
    class Z {}
}

$test->prop = new Z;
var_dump($test->prop);
var_dump($test->method(new Z));

if (true) {
    class Y {}
}

$test->prop = new Y;
var_dump($test->prop);
var_dump($test->method(new Y));

