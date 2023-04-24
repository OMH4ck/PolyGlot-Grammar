<?php

class Statics {
	public static $staticVar = 1;
}

Statics::$staticVar = 2;

$reflect = new \ReflectionClass(Statics::class);
$prop = $reflect->getProperty("staticVar");
var_dump($prop->getDefaultValue());

