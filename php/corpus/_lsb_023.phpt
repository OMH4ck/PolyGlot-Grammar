<?php
class A {
    public static function out() {
        echo static::value(), PHP_EOL;
    }

    private static function value() { return 'A'; }
}
class B extends A {
    protected static function value() { return 'B'; }
}
class C extends A {
    public static function value() { return 'C'; }
}
A::out();
B::out();
C::out();
