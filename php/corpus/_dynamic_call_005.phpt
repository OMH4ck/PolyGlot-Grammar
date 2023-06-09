<?php

function test_calls($func) {
    $i = 1;

    try {
        array_map($func, [['i' => new stdClass]]);
        var_dump($i);
    } catch (\Error $e) {
        echo $e->getMessage() . "\n";
    }

    try {
        $func(['i' => new stdClass]);
        var_dump($i);
    } catch (\Error $e) {
        echo $e->getMessage() . "\n";
    }

    try {
        call_user_func($func, ['i' => new stdClass]);
        var_dump($i);
    } catch (\Error $e) {
        echo $e->getMessage() . "\n";
    }
}
test_calls('extract');

