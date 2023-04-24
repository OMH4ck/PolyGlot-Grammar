<?php

set_error_handler(function($_, $msg) {
    throw new Exception($msg);
});
try {
    strlen(null);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

