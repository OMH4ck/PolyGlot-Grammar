<?php

enum Foo {
    case Bar;
}

enum Baz {
    case Qux;
}

function takesFoo(Foo $foo) {}
function takesBaz(Baz $baz) {}

takesFoo(Foo::Bar);
takesBaz(Baz::Qux);

try {
    takesBaz(Foo::Bar);
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

try {
    takesFoo(Baz::Qux);
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

