<?php

trait Foo {
    public const A = 123;
}

class Base {
    use Foo;
}

class Derived extends Base {
    public const A = 456;
}

echo Derived::A, PHP_EOL;
