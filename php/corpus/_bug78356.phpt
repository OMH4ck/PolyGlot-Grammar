<?php
$object = new class implements ArrayAccess {
    public function offsetGet($offset): mixed
    {
        return [1, 2];
    }
    public function offsetExists($offset): bool
    {
        return true;
    }
    public function offsetUnset($offset): void {}
    public function offsetSet($offset, $value): void {}
};
var_dump(max(...$object[0]));
