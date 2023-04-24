<?php

namespace {
    $test = function($a = 'a', $b = 'b', $c = 'c') {
        echo "a = $a, b = $b, c = $c\n";
    };
    $test_variadic = function(...$args) {
        var_dump($args);
    };

    call_user_func_array($test, ['A', 'B']);
    call_user_func_array($test, [1 => 'A', 0 => 'B']);
    call_user_func_array($test, ['A', 'c' => 'C']);
    call_user_func_array($test_variadic, ['A', 'c' => 'C']);
    try {
        call_user_func_array($test, ['d' => 'D']);
    } catch (\Error $e) {
        echo $e->getMessage(), "\n";
    }
    try {
        call_user_func_array($test, ['c' => 'C', 'A']);
    } catch (\Error $e) {
        echo $e->getMessage(), "\n";
    }
    echo "\n";
}

namespace Foo {
    call_user_func_array($test, ['A', 'B']);
    call_user_func_array($test, [1 => 'A', 0 => 'B']);
    call_user_func_array($test, ['A', 'c' => 'C']);
    call_user_func_array($test_variadic, ['A', 'c' => 'C']);
    try {
        call_user_func_array($test, ['d' => 'D']);
    } catch (\Error $e) {
        echo $e->getMessage(), "\n";
    }
    try {
        call_user_func_array($test, ['c' => 'C', 'A']);
    } catch (\Error $e) {
        echo $e->getMessage(), "\n";
    }
}

