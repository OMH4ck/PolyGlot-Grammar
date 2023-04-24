<?php

function test($a = 1, $b) {
}
try {
    test(b: 2);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

