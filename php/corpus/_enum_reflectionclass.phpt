<?php

enum Foo {
    case Bar;
    case Baz;
}

var_dump((new \ReflectionClass(Foo::class))->getConstants());

