<?php

function test(...$args) {
    var_dump($args);
}

test(...[1, 2], a: 3);
test(...[1, 'a' => 2], b: 3);

function test2($a, $b, $c = 3, $d = 4) {
    var_dump($a, $b, $c, $d);
}

test2(...[1, 2], d: 40);
test2(...['b' => 2, 'a' => 1], d: 40);

try {
    test2(...[1, 2], b: 20);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    test2(...[1, 'b' => 2], b: 20);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

