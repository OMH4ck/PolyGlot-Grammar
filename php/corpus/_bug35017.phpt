<?php
set_error_handler('errorHandler');
try {
    if ($a) {
        echo "1\n";
    } else {
        echo "0\n";
    }
    echo "?\n";
} catch(Exception $e) {
  echo "This Exception should be caught\n";
}
function errorHandler($errno, $errstr, $errfile, $errline) {
    throw new Exception('Some Exception');
}
