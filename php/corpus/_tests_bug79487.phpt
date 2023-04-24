<?php
class Foo {
    public static $bar = 'orig';
}

Foo::$bar = 'new';
$rc = new ReflectionClass('Foo');
var_dump($rc->getStaticProperties());

class A {
  public static $a = 'A old';
}
class B extends A {
  public static $b = 'B old';
}

$rc = new ReflectionClass(B::class);
A::$a = 'A new';
var_dump($rc->getStaticProperties());
