<?php

try {
    test($foo = new stdClass);
    var_dump($foo);
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}
try {
    test($bar = 2);
    var_dump($bar);
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

test($baz = &$bar);
var_dump($baz);

function test(&$param) {
        $param = 1;
}

