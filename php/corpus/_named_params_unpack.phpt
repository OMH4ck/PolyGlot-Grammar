<?php

function test($a, $b, $c) {
    echo "a = $a, b = $b, c = $c\n";
}

function test2($a = null, &$b = null) {
    $b++;
}

test(...['a' => 'a', 'b' => 'b', 'c' => 'c']);
test(...['c' => 'c', 'b' => 'b', 'a' => 'a']);
test(...['a', 'b' => 'b', 'c' => 'c']);

try {
    test(...['a', 'b' => 'b', 'c']);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    test(...['a', 'a' => 'a']);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

$ary = ['b' => 0];
$ary2 = $ary;
test2(...$ary);
var_dump($ary, $ary2);

test(...new ArrayIterator(['a' => 'a', 'b' => 'b', 'c' => 'c']));
test(...new ArrayIterator(['c' => 'c', 'b' => 'b', 'a' => 'a']));
test(...new ArrayIterator(['a', 'b' => 'b', 'c' => 'c']));

try {
    test(...new ArrayIterator(['a', 'b' => 'b', 'c']));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    test(...new ArrayIterator(['a', 'a' => 'a']));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

$ary = ['b' => 0];
$ary2 = $ary;
test2(...new ArrayIterator($ary));
var_dump($ary, $ary2);

