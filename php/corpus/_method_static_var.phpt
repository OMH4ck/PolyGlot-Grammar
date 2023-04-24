<?php

class Foo {
    public static function test() {
        static $i = 0;
        var_dump(++$i);
    }
}

Foo::test();
eval("class Bar extends Foo {}");
Foo::test();

Bar::test();
Bar::test();
