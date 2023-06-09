<?php
class foo implements arrayAccess
{
    private $bar;
    public function __construct()
    {
        $this->bar = new bar();
    }
    public function & __get($key)
    {
        $bar = $this->bar;
        return $bar;
    }

    public function & offsetGet($key): mixed {
        $bar = $this->bar;
        return $bar;
    }
    public function offsetSet($key, $val): void {
    }
    public function offsetUnset($key): void {
    }
    public function offsetExists($key): bool {
    }
}
class bar { public $onBaz = []; }

$foo = new foo();
$foo->bar->onBaz[] = function() {};
var_dump($foo->bar->onBaz);

$foo = new foo();
$foo["bar"]->onBaz[] = function() {};
var_dump($foo->bar->onBaz);
