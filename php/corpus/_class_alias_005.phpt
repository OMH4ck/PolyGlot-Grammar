<?php

class foo {
    static public function msg() {
        print "hello\n";
    }
}

interface test { }


class_alias('foo', 'baz');

class bar extends baz {
    public function __construct() {
        foo::msg();
    }
}

new bar;

