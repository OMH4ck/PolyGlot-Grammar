<?php

enum Foo {
    case Bar;
}

enum IntFoo: int {
    case Bar = 0;
}

$bar = Foo::Bar;
try {
    $bar->name = 'Baz';
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}
try {
    $bar->value = 1;
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

$intBar = IntFoo::Bar;
try {
    $intBar->name = 'Baz';
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}
try {
    $intBar->value = 1;
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}
try {
    $intBar->value2 = 1;
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

