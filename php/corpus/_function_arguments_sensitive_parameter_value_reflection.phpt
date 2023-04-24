<?php

$v = new SensitiveParameterValue('secret');

$r = new ReflectionClass($v);
$p = $r->getProperty('value');

var_dump($p->getValue($v));

