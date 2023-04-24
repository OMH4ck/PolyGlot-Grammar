<?php

class FooBar implements Iterator {
    function __construct()   { echo "Constructing new FooBar\n"; }
    function __destruct()    { echo "Destructing FooBar\n"; }
    function current (): mixed      { throw new Exception; }
    function key (): int          { return 0; }
    function next (): void         {}
    function rewind (): void       {}
    function valid (): bool        { return true; }
}

function foo() {
    try {
        $f = new FooBar;
        yield from $f;
    } catch (Exception $e) {
        echo "[foo()] Caught Exception\n";
    }
}

function bar() {
    echo "Starting bar()\n";
    $x = foo();
    try {
        var_dump($x->current());
    } catch (Exception $e) {
        echo "[bar()] Caught Exception\n";
    }
    echo "Unsetting \$x\n";
    unset($x);
    echo "Finishing bar()\n";
}

bar();

