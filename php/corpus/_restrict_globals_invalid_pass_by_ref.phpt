<?php

function by_ref(&$ref) {}
try {
    by_ref($GLOBALS);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    by_ref2($GLOBALS);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
function by_ref2(&$ref) {}

