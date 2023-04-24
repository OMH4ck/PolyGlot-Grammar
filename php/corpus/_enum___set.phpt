<?php

enum Foo {
    case Bar;

    public function __set(string $name, mixed $value)
    {
    }
}

