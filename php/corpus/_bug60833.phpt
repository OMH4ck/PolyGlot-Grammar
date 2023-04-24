<?php
class A {
    static $x = "A";
    function testit() {
        var_dump(new sELF);
        var_dump(new SELF);
    }
}

class B extends A {
    static $x = "B";
    function testit() {
        PARENT::testit();
        var_dump(new sELF);
        var_dump(new PARENT);
        var_dump(STATIC::$x);
    }
}
$t = new B();
$t->testit();
