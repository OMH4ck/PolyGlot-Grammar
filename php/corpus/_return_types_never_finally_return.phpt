<?php

function foo() : never {
    try {
        throw new Exception('bad');
    } finally {
        return;
    }
}

// Note the lack of function call: function validated at compile-time
