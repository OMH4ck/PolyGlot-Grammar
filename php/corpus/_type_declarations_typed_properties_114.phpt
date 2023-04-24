<?php
class A implements IteratorAggregate {
    function __construct(
        public string $foo = 'bar'
    ) {}

    function getIterator(): Traversable {
        return new ArrayIterator($this);
    }
}

$obj = new A;
foreach ($obj as $k => &$v) {
    try {
        $v = [];
    } catch (Throwable $e) {
        echo $e->getMessage(), "\n";
    }
}
foreach ($obj as $k => &$v) {
    try {
        $v = [];
    } catch (Throwable $e) {
        echo $e->getMessage(), "\n";
    }
}

var_dump($obj);
