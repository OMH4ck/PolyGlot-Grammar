<?php
set_error_handler(function($code, $msg) {
    echo "Err: $msg\n";
    $GLOBALS['a']=null;
});
$a[$y]=$a.=($y);
var_dump($a);
