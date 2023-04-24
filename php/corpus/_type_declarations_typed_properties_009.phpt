<?php
class Foo {
    public int $bar;

    public function __get($name) {
        var_dump($name);
        /* return value has to be compatible with int */
        return 0;
    }
}

$foo = new Foo();

unset($foo->bar);

var_dump($foo->bar);
