<?php

class B {
    public $prop = A::C;
}

spl_autoload_register(function ($class) {
    class A { const C = "A"; }
    var_dump(new B());
});

try {
    var_dump(new B());
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

