<?php

function test(false $v) { var_dump($v); }

try {
    test(0);
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}
try {
    test('');
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}
try {
    test([]);
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}

