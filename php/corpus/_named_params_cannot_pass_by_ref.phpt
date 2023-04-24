<?php
function test($a, &$e) {}
try {
    test(e: 42);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
