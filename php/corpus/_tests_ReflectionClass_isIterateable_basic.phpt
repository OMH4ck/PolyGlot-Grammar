<?php

class IteratorClass implements Iterator {
    public function __construct() { }
    public function key(): mixed {}
    public function current(): mixed {}
    function next(): void {}
    function valid(): bool {}
    function rewind(): void {}
}
class DerivedClass extends IteratorClass {}
class NonIterator {}

function dump_iterateable($class) {
    $reflection = new ReflectionClass($class);
    var_dump($reflection->isIterateable());
}

$classes = array("ArrayObject", "IteratorClass", "DerivedClass", "NonIterator");
foreach ($classes as $class) {
    echo "Is $class iterateable? ";
    dump_iterateable($class);
}
