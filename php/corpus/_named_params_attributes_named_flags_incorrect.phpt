<?php

// TODO: This should error at compile-time.
#[Attribute(not_flags: Attribute::TARGET_CLASS)]
class MyAttribute {
}

#[MyAttribute]
function test() {}

(new ReflectionFunction('test'))->getAttributes()[0]->newInstance();

