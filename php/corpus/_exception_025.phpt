<?php

function main($arg) {
    echo (new Exception()), "\n";
}
var_dump(ini_set('zend.exception_string_param_max_len', '-1'));
var_dump(ini_set('zend.exception_string_param_max_len', '1000001'));
var_dump(ini_set('zend.exception_string_param_max_len', '1000000'));
var_dump(ini_set('zend.exception_string_param_max_len', '20'));
main('short');
main('123456789012345678901234567890');
var_dump(ini_set('zend.exception_string_param_max_len', '0'));
main('short');
main('');

