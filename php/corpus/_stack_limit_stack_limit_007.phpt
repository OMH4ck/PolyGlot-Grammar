<?php

var_dump(zend_test_zend_call_stack_get());

function replace() {
    return preg_replace_callback('#.#', function () {
        try {
            $tryExecuted = true;
            return replace();
        } catch (Error $e) {
            echo $e->getMessage(), "\n";
            // We should not enter the catch block if we haven't executed at
            // least one op in the try block
            printf("Try executed: %d\n", $tryExecuted ?? 0);
        }
    }, 'x');
}

replace();

