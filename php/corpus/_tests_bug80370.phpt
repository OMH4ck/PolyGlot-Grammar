<?php
#[AllowDynamicProperties]
class Foobar {

}

$foobar = new Foobar();
$foobar->bar = 42;

$reflectionObject = new ReflectionObject($foobar);
$reflectionProperty = $reflectionObject->getProperty('bar');
