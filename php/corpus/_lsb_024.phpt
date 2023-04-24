<?php
class A {
    private static $value = 'A';

    public static function out() {
        echo static::$value, PHP_EOL;
    }
}
class B extends A {
    protected static $value = 'B';
}
class C extends A {
    public static $value = 'C';
}
A::out();
B::out();
