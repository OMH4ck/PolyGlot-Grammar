<?php

class Foo {
    public readonly string $bar;

    public function __construct() {
        $this->bar = 'bar';
        try {
            $this->bar = 42;
        } catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
    }
}

new Foo();

