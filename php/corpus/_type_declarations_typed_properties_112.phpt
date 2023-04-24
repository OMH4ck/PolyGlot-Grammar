<?php
class Foo {
    public true $value;
}

$foo = new Foo();

try {
    $foo->value = false;
} catch (\TypeError $e) {
    echo $e->getMessage();
}

