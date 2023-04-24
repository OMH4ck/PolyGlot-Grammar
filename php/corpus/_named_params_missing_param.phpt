<?php

function test($a, $b, $c, $d) {
}

try {
    test(a: 'a', d: 'd');
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

try {
    array_keys(strict: true);
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

try {
    array_keys([], strict: true);
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

// This works fine, as search_value is explicitly specified.
var_dump(array_keys([41, 42], filter_value: 42, strict: true));

