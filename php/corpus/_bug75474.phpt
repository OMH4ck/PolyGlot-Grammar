<?php

function bar($k, $v) {
    static $foo = [];
    $foo[$k] = $v;
    return $foo;
}

var_dump(bar(0, 0));
var_dump(Closure::fromCallable("bar")(1, 1));
var_dump(bar(2, 2));
var_dump(Closure::fromCallable("bar")(3, 3));
$RF = new ReflectionFunction("bar");
var_dump($RF->getClosure()(4, 4));
var_dump(bar(5, 5));

