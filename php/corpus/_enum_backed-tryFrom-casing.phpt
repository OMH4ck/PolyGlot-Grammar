<?php

enum Foo: string {}

$reflectionEnum = new ReflectionEnum(Foo::class);
$reflectionMethod = $reflectionEnum->getMethod('tryFrom');

echo $reflectionMethod->getName() . "\n";

