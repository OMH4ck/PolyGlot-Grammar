<?php
$arr = [1];
$ref =& $arr[0];
var_dump($arr[0] + ($arr[0] = 2));

$obj = new stdClass;
$obj->prop = 1;
$ref =& $obj->prop;
var_dump($obj->prop + ($obj->prop = 2));

