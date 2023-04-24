<?php

enum Foo {}
class Bar {}

echo (new ReflectionEnum(Foo::class))->getName() . "\n";

try {
    new ReflectionEnum('Bar');
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
}

try {
    new ReflectionEnum('Baz');
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
}

try {
    new ReflectionEnum([]);
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

