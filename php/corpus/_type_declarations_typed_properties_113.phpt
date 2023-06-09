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
	$v = 42;
}

var_dump($obj);
