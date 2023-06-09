<?php

#[AllowDynamicProperties]
class T {
    // Class must have at least one property. Property must have a type.
    // Empty class or untyped property removes segfault
    public int $i;
}

$t = new T;
// $x must be undefined or a non-string type
$x = 1;
$t->$x = 2;
$t->$x--;

var_dump($t);

