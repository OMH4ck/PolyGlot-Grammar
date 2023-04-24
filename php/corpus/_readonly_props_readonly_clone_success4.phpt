<?php

class Foo {
    public function __construct(
        public readonly int $bar
    ) {}

    public function __clone()
    {
        try {
            $this->bar = "foo";
        } catch (Error $e) {
            echo $e->getMessage() . "\n";
        }

        $this->bar = 2;
    }
}

$foo = new Foo(1);

var_dump(clone $foo);
var_dump(clone $foo);

