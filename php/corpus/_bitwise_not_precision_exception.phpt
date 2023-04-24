<?php
set_error_handler(function($_, $msg) {
    throw new Exception($msg);
});
try {
    var_dump(~INF);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
