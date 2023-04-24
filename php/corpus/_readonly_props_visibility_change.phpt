<?php

class A {
    protected readonly int $prop;

    public function __construct() {
        $this->prop = 42;
    }
}
class B extends A {
    public readonly int $prop;
}

$a = new A();
try {
    var_dump($a->prop);
} catch (Error $error) {
    echo $error->getMessage() . "\n";
}

$b = new B();
var_dump($b->prop);

