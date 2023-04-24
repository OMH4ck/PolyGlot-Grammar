<?php
class C10 implements ArrayAccess
{
        function offsetExists($offset): bool
        {
                echo "\nInside " . __METHOD__ . "\n"; var_dump($offset);
        }
        function offsetGet($offset): mixed
        {
                echo "\nInside " . __METHOD__ . "\n"; var_dump($offset); return 100;
        }
        function offsetSet($offset, $value): void
        {
                echo "\nInside " . __METHOD__ . "\n"; var_dump($offset); var_dump($value);
        }
        function offsetUnset($offset): void
        {
                echo "\nInside " . __METHOD__ . "\n"; var_dump($offset);
        }
}

$c10 = new C10;

var_dump($c10[] += 5);
