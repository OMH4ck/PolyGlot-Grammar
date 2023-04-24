<?php
declare(strict_types=1);

$array = [1, 2, 3];

try {
    $len = [];
    call_user_func_array('var_dump', array_slice($array, 0, $len));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
    $len = 2.0;
    call_user_func_array('var_dump', array_slice($array, 0, $len));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

$len = null;
call_user_func_array('var_dump', array_slice($array, 1, $len));

