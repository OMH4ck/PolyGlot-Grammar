<?php

class A
{
    private string $prop1 = '123';

    public function __toString()
    {
        return $this->prop1;
    }
}

class B
{
    private string $prop2;
}

$b = new B();

$reflector = new ReflectionClass($b);
$property = $reflector->getProperty('prop2');
$property->setAccessible(true);
$property->setValue($b, new A());

var_dump($b);

