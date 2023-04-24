<?php

function foo(): never {}

$neverType = (new ReflectionFunction('foo'))->getReturnType();

echo $neverType->getName() . "\n";
var_dump($neverType->isBuiltin());

