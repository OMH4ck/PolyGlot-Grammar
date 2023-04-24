<?php

class ObjectOne {
    public function __construct() {
    }
}

$class= new ReflectionClass('ObjectOne');
var_dump($class->newInstanceArgs());

class ObjectTwo {
    public function __construct($var) {
        var_dump($var);
    }
}

$class= new ReflectionClass('ObjectTwo');
try {
    var_dump($class->newInstanceArgs());
} catch (Throwable $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
var_dump($class->newInstanceArgs(array('test')));


echo "Done\n";
