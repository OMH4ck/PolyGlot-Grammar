<?php
class Child
{
    protected $bar;

    public function __destruct()
    {
        $this->bar = null;
    }
}

class Parnt
{
    protected $child;

    public function doSomething()
    {
        $this->child = new Child();

        $prop = new \ReflectionProperty($this, 'child');
        $prop->setValue($this, null);
    }
}

$p = new Parnt();
$p->doSomething();

echo "OK\n";
