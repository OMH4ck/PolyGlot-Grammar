<?php

#[Attribute]
class FooAttribute {}

class A {
    public readonly int $prop;

    public function __construct() {
        $this->prop = 42;
    }
}
class B extends A {
    #[FooAttribute]
    public readonly int $prop;
}

var_dump((new ReflectionProperty(B::class, 'prop'))->getAttributes()[0]->newInstance());

