<?php

class Foo {
    public function __construct(
        public readonly array $bar
    ) {}

    public function __clone()
    {
        $this->bar['bar'] = 'bar';
    }
}

$foo = new Foo([]);
// First call fills the cache slot
var_dump(clone $foo);
var_dump(clone $foo);

