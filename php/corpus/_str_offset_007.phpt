<?php
set_error_handler(function($code, $msg) {
    echo "Err: $msg\n";
    $GLOBALS['a']='';
});
$a=['a'];
$a[0][$d]='b';
var_dump($a);
