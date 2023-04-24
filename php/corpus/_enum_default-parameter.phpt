<?php

enum Foo {
    case Bar;
}

function baz(Foo $foo = Foo::Bar) {
    var_dump($foo);
}

baz();

