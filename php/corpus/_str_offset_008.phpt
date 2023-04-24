<?php
set_error_handler(function($code, $msg) {
    echo "Err: $msg\n";
    $GLOBALS['a']=8;
});
$z = "z";
$a=["xx$z"];
var_dump($a[0][$b]);
var_dump($a);
