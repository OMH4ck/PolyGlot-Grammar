<?php

class Foo implements ArrayAccess
{
    function offsetExists($offset): bool { return true;}
    function offsetGet($offset): mixed { return null; }
    function offsetSet($offset, $value): void {/*...*/}
    function offsetUnset($offset): void {/*...*/}

    function fail()
    {
        $this['blah'];
    }

    function succeed()
    {
        $this;
        $this['blah'];
    }
}

$bar = new Foo();
$bar->succeed();
$bar->fail();

?>
