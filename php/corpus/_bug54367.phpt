<?php
class MyObjet implements ArrayAccess
{
    public function offsetSet($offset, $value): void { }
    public function offsetExists($offset): bool {  }
    public function offsetUnset($offset): void { }

    public function offsetGet($offset): mixed
    {
    return function ($var) use ($offset) { // here is the problem
              var_dump($offset, $var);
        };
    }
}

$a = new MyObjet();
echo $a['p']('foo');
