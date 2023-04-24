<?php

function test1($a = 'a', $b = 'b') {
    echo "a: $a, b: $b\n";
}

function test2($a = SOME_CONST, $b = 'b') {
    echo "a: $a, b: $b\n";
}

function test3($a = SOME_OTHER_CONST, $b = 'b') {
    echo "a: $a, b: $b\n";
}

test1(b: 'B');

define('SOME_CONST', 'X');
test2(b: 'B');

// NB: We also want to test the stack trace.
test3(b: 'B');

