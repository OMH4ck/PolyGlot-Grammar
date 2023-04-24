<?php
var_dump(method_exists(Closure::class, "__invoke"));
var_dump(method_exists(Closure::class, "__INVOKE"));

$closure = function(){};

var_dump(method_exists($closure, "__INVOKE"));
