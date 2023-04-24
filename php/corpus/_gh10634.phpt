<?php
function test_input($input) {
    try {
        eval($input);
    } catch(Throwable $e) {
        var_dump($e->getMessage());
    }
}

test_input("y&/*");
test_input("y&/**");
test_input("y&#");
test_input("y&#  ");
test_input("y&//");
