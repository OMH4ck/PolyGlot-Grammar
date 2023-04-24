<?php

class A {
	public static $x = 'default';
}

A::$x = new stdClass;

$rp = new ReflectionProperty('A', 'x');
echo $rp;

