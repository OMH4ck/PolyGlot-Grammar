<?php

$key = "foo";
$key .= "bar";
set_error_handler(function($_, $m) use (&$key) {
    echo "$m\n";
    $key .= "baz";
});

$ary = [];
$ary[$key]++;
var_dump($ary);
$ary[$key] += 1;
var_dump($ary);

