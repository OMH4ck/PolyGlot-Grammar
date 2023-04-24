<?php

trait TestTrait {
  /** DocComments */
  public const Constant = 42;
}

class TestClass {
  use TestTrait;
}

$reflection = new \ReflectionClass(TestTrait::class);
var_dump($reflection->getReflectionConstant('Constant')->getDocComment());

$reflection = new \ReflectionClass(TestClass::class);
var_dump($reflection->getReflectionConstant('Constant')->getDocComment());

