<?php

try {
    var_dump(constant(""));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

define("TEST_CONST", 1);
var_dump(constant("TEST_CONST"));

define("TEST_CONST2", "test");
var_dump(constant("TEST_CONST2"));

echo "Done\n";
