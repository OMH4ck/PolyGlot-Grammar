<?php

function test(Type &$ref) {
}
try {
    call_user_func('test', 0);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

