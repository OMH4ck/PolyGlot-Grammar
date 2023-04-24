<?php

$float = 1.0;

function foo(int|string $a): void {
    var_dump($a);
}

foo(1.0);
foo(1.5);
foo(fdiv(0, 0));
foo(10e120);
foo(10e500); // Infinity



