<?php
class Foo {
    public false $value;
}

$foo = new Foo();
$foo->value = false;

try {
    $foo->value = true;
} catch (\TypeError $e) {
    echo $e->getMessage();
}

