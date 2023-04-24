<?php

var_dump(zend_test_zend_call_stack_get());

function replace() {
    return preg_replace_callback('#.#', function () {
        try {
            return replace();
        } catch (Error $e) {
            echo "Will throw:\n";
            try {
                return replace2();
            } catch (Error $e) {
                echo $e->getMessage();
            }
        }
    }, 'x');
}

function replace2() {
    return preg_replace_callback('#.#', function () {
        try {
            return '';
        } finally {
            // We should not enter the finally block if we haven't executed at
            // least one op in the try block
            echo "Finally block: This should not execute\n";
        }
    }, 'x');
}

replace();

