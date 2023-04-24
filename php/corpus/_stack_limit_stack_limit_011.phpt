<?php

var_dump(zend_test_zend_call_stack_get());

class Test1 {
    public function __destruct() {
        new Test1;
    }
}

function replace() {
    return preg_replace_callback('#.#', function () {
        try {
            replace();
        } finally {
            new Test1();
        }
    }, 'x');
}

try {
    replace();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
    echo 'Previous: ', $e->getPrevious()->getMessage(), "\n";
}

