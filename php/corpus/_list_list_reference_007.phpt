<?php

class StorageRef implements ArrayAccess {
    private $s = [];
    function __construct(array $a) { $this->s = $a; }
    function offsetSet ($k, $v): void { $this->s[$k] = $v; }
    function &offsetGet ($k): mixed { return $this->s[$k]; }
    function offsetExists ($k): bool { return isset($this->s[$k]); }
    function offsetUnset ($k): void { unset($this->s[$k]); }
}

$a = new StorageRef([1, 2]);
list(&$one, $two) = $a;
var_dump($a);

$a = new StorageRef([1, 2]);
list(,,list($var)) = $a;
var_dump($a);

$a = new StorageRef([1, 2]);
list(,,list(&$var)) = $a;
var_dump($a);

$a = new StorageRef(['one' => 1, 'two' => 2]);
['one' => &$one, 'two' => $two] = $a;
var_dump($a);

