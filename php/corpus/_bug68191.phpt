<?php

$obj = new stdClass;

$obj->prop1 = 'abc';
$obj->prop2 =& $obj->prop1;
$obj->prop2 .= 'xyz';
var_dump($obj->prop1);

$obj->prop3 = 1;
$obj->prop4 =& $obj->prop3;
++$obj->prop4;
var_dump($obj->prop3);

