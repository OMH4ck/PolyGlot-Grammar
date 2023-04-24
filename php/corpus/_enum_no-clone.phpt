<?php

enum Foo {
    case Bar;
}

try {
    var_dump(clone Foo::Bar);
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

