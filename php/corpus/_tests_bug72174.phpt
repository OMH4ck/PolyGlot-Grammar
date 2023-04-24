<?php

class Foo
{
    private $bar;

    public function __construct()
    {
        unset($this->bar);
    }

    public function __isset($name)
    {
        var_dump(__METHOD__);
        return true;
    }

    public function __get($name)
    {
        var_dump(__METHOD__);
        return $name;
    }
}

$instance = new Foo();
$reflectionBar = (new ReflectionProperty(Foo::class, 'bar'));
var_dump($reflectionBar->getValue($instance));

