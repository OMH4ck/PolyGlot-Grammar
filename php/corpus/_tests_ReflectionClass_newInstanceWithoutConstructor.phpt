<?php
class Foo
{
    public function __construct()
    {
        print __METHOD__;
    }
}

$class = new ReflectionClass('Foo');
var_dump($class->newInstanceWithoutConstructor());

$class = new ReflectionClass('StdClass');
var_dump($class->newInstanceWithoutConstructor());

$class = new ReflectionClass('DateTime');
var_dump($class->newInstanceWithoutConstructor());

$class = new ReflectionClass('Generator');
try {
    var_dump($class->newInstanceWithoutConstructor());
} catch (ReflectionException $e) {
    echo $e->getMessage(), "\n";
}

final class Bar extends ArrayObject {
}

$class = new ReflectionClass('Bar');
var_dump($class->newInstanceWithoutConstructor());

