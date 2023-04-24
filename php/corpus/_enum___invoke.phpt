<?php

enum Foo {
    case Bar;

    public function __invoke(...$args)
    {
        return $args;
    }
}

var_dump((Foo::Bar)('baz', 'qux'));

