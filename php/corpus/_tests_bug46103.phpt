<?php

$obj = new stdClass;
$obj->r = new ReflectionObject($obj);
var_dump($obj);

