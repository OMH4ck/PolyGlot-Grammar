<?php

class FooBar implements Iterator {
    function rewind(): void {}
    function current(): mixed {}
    function key(): mixed {}
    function next(): void {}
    function valid(): bool {
        throw new Exception("Exception from valid()");
    }
}

function gen() {
    try {
        // the fact that the yield from result is used is relevant.
        var_dump(yield from new FooBar);
    } catch (Exception $e) {
        echo $e->getMessage(), "\n";
    }
}

$x = gen();
$x->current();

