<?php
set_error_handler(function() {
    unset($GLOBALS['c']);
});
$c -= 1;
var_dump($c);
