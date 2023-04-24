<?php

class Foo {
    public function __construct(
        public readonly int $bar
    ) {}

    public function __clone()
    {
        $this->bar = 2;
        var_dump($this);
        $this->bar = 3;
    }
}

$foo = new Foo(1);

try {
    clone $foo;
} catch (Error $exception) {
    echo $exception->getMessage() . "\n";
}

echo "done";

