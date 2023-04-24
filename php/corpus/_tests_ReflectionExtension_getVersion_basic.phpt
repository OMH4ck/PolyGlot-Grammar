<?php
$obj = new ReflectionExtension('reflection');
$var = $obj->getVersion() ? $obj->getVersion() : null;
var_dump($var);
