<?php

class A implements ArrayAccess {
    public $foo = array();

    public function &offsetGet($n): mixed {
        return $this->foo[$n];
    }

    public function offsetSet($n, $v): void {
    }
    public function offsetUnset($n): void {
    }
    public function offsetExists($n): bool {
    }
}

$a = new A;

$a['foo']['bar'] = 2;

var_dump($a);

