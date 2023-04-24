<?php

function test(string $val) {
    $a = &$val;
    hackingHere();
    print_r($val);
}

function hackingHere() {
    // we're able to modify the $val from here, even though the arg was not a reference
    debug_backtrace()[1]['args'][0] = 'Modified';
}

test('Original');

