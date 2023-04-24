<?php

function test(true $v) { var_dump($v); }

try {
    test(1);
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}
try {
    test('1');
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}
try {
    test([1]);
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}
try {
    test(new stdClass());
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}

