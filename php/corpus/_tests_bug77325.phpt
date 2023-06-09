<?php

class Foo {
    const FOO = 'foo';
}

class Bar extends Foo {
}

$barClassReflection = new ReflectionClass(Bar::class);
$constants = $barClassReflection->getReflectionConstants();
foreach ($constants as $constant) {
    var_dump($constant->class);
    var_dump($constant->getDeclaringClass()->getName());
}

$constant = new ReflectionClassConstant(Bar::class, 'FOO');
var_dump($constant->class);
var_dump($constant->getDeclaringClass()->getName());

