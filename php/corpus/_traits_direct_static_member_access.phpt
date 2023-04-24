<?php

trait T {
    public static $foo;
    public static function foo() {
        echo "Foo\n";
    }
    public static function __callStatic($name, $args) {
        echo "CallStatic($name)\n";
    }
}

class C {
    use T;
}

function test() {
    T::$foo = 42;
    var_dump(T::$foo);
    T::foo();
    T::bar();
    echo "\n";
}

// Call twice to test cache slot behavior.
test();
test();

C::$foo = 42;
var_dump(C::$foo);
C::foo();
C::bar();

