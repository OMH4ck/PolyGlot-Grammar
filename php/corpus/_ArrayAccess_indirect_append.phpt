<?php

class AA implements ArrayAccess {
    private $data = [];
    public function &offsetGet($name): mixed {
        if (null === $name) {
            return $this->data[];
        } else {
            return $this->data[$name];
        }
    }
    public function offsetSet($name, $value): void {
        $this->data[$name] = $value;
    }
    public function offsetUnset($name): void {}
    public function offsetExists($name): bool {}
}

$aa = new AA;
$aa[3] = 1;
$aa[][][0] = 2;
var_dump($aa);

