<?php
class A {

    private static function testprivate() {
        return 1;
    }
    public static function test() {
        return function() {
            return self::testprivate();
        };
    }
}

class B extends A {
}

$fn = B::test();
echo $fn();

