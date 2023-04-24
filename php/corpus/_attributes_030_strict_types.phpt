<?php

#[Attribute]
class MyAttribute {
    public function __construct(public int $value) {}
}

#[MyAttribute("42")]
class TestWeak {}

require __DIR__ . '/030_strict_types.inc';

var_dump((new ReflectionClass(TestWeak::class))->getAttributes()[0]->newInstance());
var_dump((new ReflectionClass(TestStrict::class))->getAttributes()[0]->newInstance());

