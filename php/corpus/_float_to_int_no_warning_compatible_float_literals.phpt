<?php

echo 'Bitwise ops:' . \PHP_EOL;
$var = ~1.0;
var_dump($var);
$var = 1.0|3;
var_dump($var);
$var = 1.0&3;
var_dump($var);
$var = 1.0^3;
var_dump($var);
$var = 1.0 << 3;
var_dump($var);
$var = 1.0 >> 3;
var_dump($var);
$var = 3 << 1.0;
var_dump($var);
$var = 3 >> 1.0;
var_dump($var);

echo 'Modulo:' . \PHP_EOL;
$var = 6.0 % 2;
var_dump($var);
$var = 9 % 2.0;
var_dump($var);

echo 'Offset access:' . \PHP_EOL;
echo 'Arrays:' . \PHP_EOL;
$array = ['a', 'b', 'c'];
var_dump($array[1.0]);
$array[2.0] = 'z';
var_dump($array);

/* Strings are handled differently and always warn on non integer keys */

echo 'Function calls:' . \PHP_EOL;
function foo(int $a) {
    return $a;
}
var_dump(foo(1.0));

var_dump(chr(60.0));

echo 'Function returns:' . \PHP_EOL;
function bar(): int {
    return 3.0;
}
var_dump(bar());

echo 'Typed property assignment:' . \PHP_EOL;
class Test {
    public int $a;
}

$instance = new Test();
$instance->a = 1.0;
var_dump($instance->a);

