<?php

#[Attribute]
class B {
    public function __construct($value)
    {
    }
}

class A {
    public function __construct(
        #[B(12, X)] public $b
    )
    {
    }
}

const X = 42;

var_dump((new ReflectionParameter(['A', '__construct'], 'b'))->getAttributes()[0]->getArguments());
var_dump((new ReflectionProperty('A', 'b'))->getAttributes()[0]->getArguments());
