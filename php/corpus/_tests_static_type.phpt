<?php

class A {
    public function test(): static {
        return new static;
    }
}

$rm = new ReflectionMethod(A::class, 'test');
$rt = $rm->getReturnType();
var_dump($rt->isBuiltin());
var_dump($rt->getName());
var_dump((string) $rt);

