<?php
set_error_handler(function($code, $msg) {
    echo "Err: $msg\n";
    $GLOBALS[''] = $GLOBALS['y'];
});
function x(&$s){
    $s[100000000000000000000] = 1;
}
x($y);
var_dump($y);
