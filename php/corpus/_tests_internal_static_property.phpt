<?php

$rp = new ReflectionProperty('_ZendTestClass', '_StaticProp');
$rp->setValue(42);
var_dump($rp->getValue());

