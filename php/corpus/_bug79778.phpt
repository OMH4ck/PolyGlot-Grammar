<?php
$closure1 = function() {
    static $var = CONST_REF;
};
var_dump($closure1);
print_r($closure1);
