<?php

$float = 10e120;
$string_float = (string) $float;

var_dump((int) $float);
var_dump((int) $string_float);

$string = 'Here is some text for good measure';

echo 'Attempt to read', \PHP_EOL;
try {
    echo 'Float', \PHP_EOL;
    var_dump($string[10e120]);
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}
try {
    echo 'Float variable', \PHP_EOL;
    var_dump($string[$float]);
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}
try {
    echo 'Float casted to string compile', \PHP_EOL;
    var_dump($string[(string) 10e120]);
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}
try {
    echo 'Float string variable', \PHP_EOL;
    var_dump($string[$string_float]);
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}

echo 'Attempt to assign', \PHP_EOL;
try {
    echo 'Float', \PHP_EOL;
    $string[10e120] = 'E';
    var_dump($string);
    $string = 'Here is some text for good measure';
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}
try {
    echo 'Float variable', \PHP_EOL;
    $string[$float] = 'E';
    var_dump($string);
    $string = 'Here is some text for good measure';
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}

try {
    $string[(string) 10e120] = 'E';
    var_dump($string);
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}
var_dump($string);
try {
    $string[$string_float] = 'E';
} catch (\TypeError) {
    echo 'TypeError', \PHP_EOL;
}
var_dump($string);

