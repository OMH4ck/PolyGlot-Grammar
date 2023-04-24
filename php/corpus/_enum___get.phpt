<?php

enum Foo {
    case Bar;

    public function __get(string $name)
    {
        return '__get';
    }
}

