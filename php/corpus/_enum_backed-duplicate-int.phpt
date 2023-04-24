<?php

enum Foo: int {
    case Bar = 0;
    case Baz = 0;
}

try {
    var_dump(Foo::Bar);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Foo::Bar);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Foo::from(42));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Foo::tryFrom('bar'));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

