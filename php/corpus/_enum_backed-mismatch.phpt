<?php

enum Foo: int {
    case Bar = 'bar';
}

try {
    var_dump(Foo::Bar);
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}

try {
    var_dump(Foo::Bar);
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}

try {
    var_dump(Foo::from(42));
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}

try {
    var_dump(Foo::from('bar'));
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}

