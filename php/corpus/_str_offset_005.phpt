<?php
set_error_handler(function(){$GLOBALS['a']=8;});
$a='a';
var_dump($a[$b]);
var_dump($a);
