<?php

enum Foo {}

try {
    (new \ReflectionClass(Foo::class))->newInstanceWithoutConstructor();
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

