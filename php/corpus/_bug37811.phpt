<?php

class TestClass
{
    function __toString()
    {
        return "Foo";
    }
}

define("Bar", new TestClass);
var_dump(Bar);
var_dump((string) Bar);

define("Baz", new stdClass);
var_dump(Baz);
try {
    var_dump((string) Baz);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

