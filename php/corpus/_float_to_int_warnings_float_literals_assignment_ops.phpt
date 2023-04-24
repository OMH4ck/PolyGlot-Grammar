<?php

echo 'Bitwise ops:' . \PHP_EOL;

$var = 3;
$var |= 1.5;
var_dump($var);

$var = 3;
$var &= 1.5;
var_dump($var);

$var = 3;
$var ^= 1.5;
var_dump($var);

$var = 3;
$var <<= 1.5;
var_dump($var);

$var = 3;
$var >>= 1.5;
var_dump($var);

echo 'Modulo:' . \PHP_EOL;
$var = 9;
$var %= 2.5;
var_dump($var);

