<?php

set_error_handler(function($_, $msg) {
    throw new Exception($msg);
});

$test = [];
try {
    $test[0] .= "xyz";
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
var_dump($test);

try {
    $test["key"] .= "xyz";
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
var_dump($test);

unset($test);
try {
    $GLOBALS["test"] .= "xyz";
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump($test);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

