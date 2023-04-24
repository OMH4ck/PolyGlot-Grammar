<?php

// This should test every branch in zend_execute.c's `zend_verify_arg_type`, `zend_verify_return_type` and `zend_verify_missing_return_type` functions which produces an "or null"/"or be null" part in its error message

function iterableF(?iterable $param) {}
try {
    iterableF(1);
} catch (\TypeError $e) {
    echo $e, PHP_EOL;
}

function returnIterable(): ?iterable {
    return 1;
}

try {
    returnIterable();
} catch (\TypeError $e) {
    echo $e, PHP_EOL;
}

function returnMissingIterable(): ?iterable {
}

try {
    returnMissingIterable();
} catch (\TypeError $e) {
    echo $e, PHP_EOL;
}
