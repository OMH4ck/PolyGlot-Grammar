<?php

$var = 0;
$fn = function() use($var) {
    var_dump($var);
};
$fn();
$fn = $fn->bindTo(null, null);
$fn();

