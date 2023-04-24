<?php

echo 'Bitwise ops:' . \PHP_EOL;

$float = 1.0;

$var = ~$float;
var_dump($var);

$var = $float|3;
var_dump($var);

$var = $float&3;
var_dump($var);

$var = $float^3;
var_dump($var);

$var = $float << 3;
var_dump($var);

$var = $float >> 3;
var_dump($var);

$var = $float;
$var <<= 3;
var_dump($var);

$var = $float;
$var >>= 3;
var_dump($var);

$var = 3 << $float;
var_dump($var);

$var = 3 >> $float;
var_dump($var);

echo 'Modulo:' . \PHP_EOL;
$modFloat = 6.0;
$var = $modFloat % 2;
var_dump($var);

$modFloat = 2.0;
$var = 9 % $modFloat;
var_dump($var);

echo 'Offset access:' . \PHP_EOL;
$offsetAccess = 2.0;
echo 'Arrays:' . \PHP_EOL;
$array = ['a', 'b', 'c'];
var_dump($array[$float]);
$array[$offsetAccess] = 'z';
var_dump($array);

echo 'Function calls:' . \PHP_EOL;
function foo(int $a) {
    return $a;
}
var_dump(foo($float));

$cp = 60.0;
var_dump(chr($cp));

echo 'Function returns:' . \PHP_EOL;
function bar(): int {
    $var = 3.0;
    return $var;
}
var_dump(bar());

echo 'Typed property assignment:' . \PHP_EOL;
class Test {
    public int $a;
}

$instance = new Test();
$instance->a = $float;
var_dump($instance->a);

