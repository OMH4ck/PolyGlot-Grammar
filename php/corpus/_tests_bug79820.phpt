<?php

#[AllowDynamicProperties]
class Test {
    public stdClass $prop;
}

$rp = new ReflectionProperty(Test::class, 'prop');
$test = new Test;
$test->prop = new stdClass;
var_dump($rp->getType()->getName());
$test->dynProp = 42;

$rp = new ReflectionProperty($test, 'dynProp');
var_dump($rp->getType());

