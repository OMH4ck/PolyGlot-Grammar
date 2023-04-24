<?php

enum Foo {
    public static function __callStatic(string $name, array $args)
    {
        return [$name, $args];
    }
}

var_dump(Foo::bar('baz', 'qux'));

