<?php

trait TestTrait {
  public const Constant = 42;
}

class TestClass {
  use TestTrait;
}

$reflection = new \ReflectionClass(TestTrait::class);
var_dump($reflection->getConstant('Constant'));
var_dump($reflection->getReflectionConstant('Constant')->getDeclaringClass()->getName());

$reflection = new \ReflectionClass(TestClass::class);
var_dump($reflection->getConstant('Constant'));
var_dump($reflection->getReflectionConstant('Constant')->getDeclaringClass()->getName());

