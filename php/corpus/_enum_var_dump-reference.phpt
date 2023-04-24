<?php

enum Foo {
    case Bar;
    case Baz;
}

$arr = [Foo::Bar];
$arr[1] = &$arr[0];
var_dump($arr);

