<?php

$array = [1, 2, 3];

try {
    $len = [];
    call_user_func_array('var_dump', array_slice($array, 0, $len));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

$len = 2.0;
call_user_func_array('var_dump', array_slice($array, 0, $len));

$len = null;
call_user_func_array('var_dump', array_slice($array, 1, $len));

