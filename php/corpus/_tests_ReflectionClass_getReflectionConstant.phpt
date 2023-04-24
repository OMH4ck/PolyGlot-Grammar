<?php
$refleClass = new ReflectionClass(ReflectionClass::class);
var_dump(gettype($refleClass->getReflectionConstant('IS_IMPLICIT_ABSTRACT')));
var_dump($refleClass->getReflectionConstant('FOO_BAR'));
