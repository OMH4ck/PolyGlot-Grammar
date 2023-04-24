<?php
class A implements IteratorAggregate {
    function __construct(
        public readonly string $foo = 'bar'
    ) {}

    function getIterator(): Traversable {
        return new ArrayIterator($this);
    }
}

$obj = new A;

try {
    foreach ($obj as $k => &$v) {}
} catch (Throwable $e) {
    echo $e->getMessage(), "\n";
}

var_dump($obj);
