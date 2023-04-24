<?php

function test($a, string ...$extra) {
    var_dump($a);
    var_dump($extra);
    // Extra named parameters do not contribute toward func_num_args() and func_get_args().
    var_dump(func_num_args());
    var_dump(func_get_args());
}

function test2(&...$refs) {
    foreach ($refs as &$ref) $ref++;
}

test(b: 'b', a: 'a', c: 'c', extra: 'extra');
echo "\n";

test('a', 'b', 'c', d: 'd');
echo "\n";

$x = 0;
$y = 0;
test2(x: $x, y: $y);
var_dump($x, $y);

