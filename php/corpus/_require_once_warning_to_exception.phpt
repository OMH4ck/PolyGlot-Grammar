<?php

function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new Exception($errstr);
}
set_error_handler("exception_error_handler");

try {
    $results = require_once 'does-not-exist.php';
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
};

