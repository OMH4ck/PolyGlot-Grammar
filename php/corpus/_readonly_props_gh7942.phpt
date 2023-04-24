<?php

class Foo {
    public readonly int $bar;
    public function __construct(int &$bar) {
        $this->bar = &$bar;
    }
}

try {
    $i = 42;
    new Foo($i);
} catch (Error $e) {
    echo $e->getMessage(), PHP_EOL;
}

