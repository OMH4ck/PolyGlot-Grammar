<?php
trait Foo {
    const A = 42;
}

class Bar {
    use Foo;
}

echo Foo::A, PHP_EOL;
