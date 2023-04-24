<?php

var_dump(zend_test_zend_call_stack_get());

function replace() {
    return preg_replace_callback('#.#', function () {
        try {
            replace();
        } finally {
            require __DIR__ . '/stack_limit_012.inc';
        }
    }, 'x');
}

replace();

