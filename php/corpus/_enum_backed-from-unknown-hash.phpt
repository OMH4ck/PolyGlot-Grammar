<?php

enum Foo: string {
    case Bar = 'B';
}

$s = 'A';
$s++;

var_dump(Foo::from($s));

