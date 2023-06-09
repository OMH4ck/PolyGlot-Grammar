<?php

class Test {
    public int $rw;
    public readonly int $ro;
}

$rp = new ReflectionProperty(Test::class, 'rw');
var_dump($rp->isReadOnly());
var_dump(($rp->getModifiers() & ReflectionProperty::IS_READONLY) != 0);

$rp = new ReflectionProperty(Test::class, 'ro');
var_dump($rp->isReadOnly());
var_dump(($rp->getModifiers() & ReflectionProperty::IS_READONLY) != 0);

$rp = new ReflectionProperty(Test::class, 'ro');
echo $rp;

