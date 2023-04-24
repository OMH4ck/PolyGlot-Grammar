<?php

function test($a, ...$rest) {
    var_dump(debug_backtrace());
    debug_print_backtrace();
    throw new Exception("Test");
}

try {
    test(1, 2, x: 3, y: 4);
} catch (Exception $e) {
    var_dump($e->getTrace());
    echo $e, "\n";
}

