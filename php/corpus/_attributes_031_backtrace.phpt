<?php

#[Attribute]
class MyAttribute {
    public function __construct() {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    }
}

#[MyAttribute]
class Test {}

(new ReflectionClass(Test::class))->getAttributes()[0]->newInstance();

