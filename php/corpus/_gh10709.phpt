<?php

class B { const C = A::C . "B"; }

spl_autoload_register(function ($class) {
    class A { const C = "A"; }
    var_dump(B::C);
});

try {
    new B();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

