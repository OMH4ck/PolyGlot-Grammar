<?php

class TestClass
{
    protected $p = 2;
}

$o = new TestClass;

$r = new ReflectionProperty($o, 'p');

var_dump($r->getValue($o));

