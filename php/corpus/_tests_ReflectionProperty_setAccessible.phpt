<?php
class A {
    protected $protected = 'a';
    protected static $protectedStatic = 'b';
    private $private = 'c';
    private static $privateStatic = 'd';
}

class B extends A {}

$a               = new A;
$protected       = new ReflectionProperty($a, 'protected');
$protectedStatic = new ReflectionProperty('A', 'protectedStatic');
$private         = new ReflectionProperty($a, 'private');
$privateStatic   = new ReflectionProperty('A', 'privateStatic');

var_dump($protected->getValue($a));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($a));
var_dump($privateStatic->getValue());

$protected->setValue($a, 'e');
$protectedStatic->setValue('f');
$private->setValue($a, 'g');
$privateStatic->setValue('h');

var_dump($protected->getValue($a));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($a));
var_dump($privateStatic->getValue());

$protected->setAccessible(FALSE);
$protectedStatic->setAccessible(FALSE);
$private->setAccessible(FALSE);
$privateStatic->setAccessible(FALSE);

var_dump($protected->getValue($a));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($a));
var_dump($privateStatic->getValue());

$protected->setValue($a, 'i');
$protectedStatic->setValue('j');
$private->setValue($a, 'k');
$privateStatic->setValue('l');

var_dump($protected->getValue($a));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($a));
var_dump($privateStatic->getValue());

$a               = new A;
$b               = new B;
$protected       = new ReflectionProperty($b, 'protected');
$protectedStatic = new ReflectionProperty('B', 'protectedStatic');
$private         = new ReflectionProperty($a, 'private');

var_dump($protected->getValue($b));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($b));

$protected->setValue($b, 'e');
$protectedStatic->setValue('f');
$private->setValue($b, 'g');

var_dump($protected->getValue($b));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($b));

$protected->setAccessible(FALSE);
$protectedStatic->setAccessible(FALSE);
$private->setAccessible(FALSE);

var_dump($protected->getValue($b));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($b));

$protected->setValue($b, 'h');
$protectedStatic->setValue('i');
$private->setValue($b, 'j');

var_dump($protected->getValue($b));
var_dump($protectedStatic->getValue());
var_dump($private->getValue($b));
