<?php
class A {
    const LIST = [
        self::TEST => 'Test',
    ];
    private const TEST = 'test';
}

class B extends A {}

$r = new ReflectionClass(B::class);
var_dump(
    $r->getConstants(),
    $r->getConstant("LIST")
);
