<?php
set_error_handler(function($code, $msg) {
    echo "Err: $msg\n";
    $GLOBALS['a']=9;
});
$a=[];
($a[PHP_INT_MAX+1]);
?>
