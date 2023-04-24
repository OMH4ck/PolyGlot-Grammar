<?php
set_error_handler(function () {
    $GLOBALS['a'] = null;
});

$a[$c] = 'x' ;
var_dump($a);
$a[$c] .= 'x' ;
var_dump($a);
$a[$c][$c] = 'x' ;
var_dump($a);

