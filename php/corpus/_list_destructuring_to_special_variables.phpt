<?php

class Obj {
    public $values = [];
    public function __set($name, $value) {
        $this->values[$name] = $value;
    }
}

class Arr implements ArrayAccess {
    public $values = [];
    public function offsetSet($name, $value): void {
        $this->values[$name] = $value;
    }
    public function offsetGet($name): mixed {}
    public function offsetExists($name): bool {}
    public function offsetUnset($name): void {}
}

$str = 'ab';
list($str[0], $str[1]) = ['x', 'y'];
var_dump($str);

$obj = new Obj;
list($obj->foo, $obj->bar) = ['foo', 'bar'];
var_dump($obj->values);

$arr = new Arr;
list($arr['foo'], $arr['bar']) = ['foo', 'bar'];
var_dump($arr->values);

