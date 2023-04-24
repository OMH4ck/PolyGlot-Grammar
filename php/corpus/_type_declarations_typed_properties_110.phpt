<?php
class Foo {
    public null $value;
}

$foo = new Foo();
$foo->value = null;

try {
    $foo->value = 1;
} catch (\TypeError $e) {
    echo $e->getMessage();
}

