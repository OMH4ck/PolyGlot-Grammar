<?php

$map = new WeakMap;
$obj = new stdClass;
$obj2 = &$obj;

$map[$obj] = 1;
var_dump(count($map));
var_dump($map);
var_dump(isset($map[$obj]));
var_dump(!empty($map[$obj]));
var_dump($map[$obj]);

