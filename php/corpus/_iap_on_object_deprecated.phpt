<?php

$obj = (object)['a' => 'b'];
var_dump(reset($obj));
var_dump(current($obj));
var_dump(key($obj));
var_dump(next($obj));
var_dump(end($obj));
var_dump(prev($obj));

