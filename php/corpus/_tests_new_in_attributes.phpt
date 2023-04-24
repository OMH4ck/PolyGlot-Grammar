<?php

#[Attribute]
class MyAttribute {
    public function __construct(public $x, public $y) {}
}

#[MyAttribute(null, new stdClass)]
class Test1 {
}

$rc = new ReflectionClass(Test1::class);
$ra = $rc->getAttributes()[0];
$args1 = $ra->getArguments();
$obj1 = $ra->newInstance();
var_dump($args1, $obj1);

// Check that we get fresh instances each time:
$args2 = $ra->getArguments();
$obj2 = $ra->newInstance();
var_dump($args1[1] !== $args2[1]);
var_dump($obj1->y !== $obj2->y);

// Check that named args work:
#[MyAttribute(y: new stdClass, x: null)]
class Test2 {
}

$rc = new ReflectionClass(Test2::class);
$ra = $rc->getAttributes()[0];
$args = $ra->getArguments();
$obj = $ra->newInstance();
var_dump($args, $obj);

