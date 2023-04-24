<?php

class Foo {
    public function __construct(
        public readonly stdClass $bar,
    ) {}

    public function __clone()
    {
        unset($this->bar);
        var_dump($this);
        $this->bar = new stdClass();
    }
}

$foo = new Foo(new stdClass());
var_dump($foo);
$foo2 = clone $foo;

var_dump($foo);
var_dump($foo2);

