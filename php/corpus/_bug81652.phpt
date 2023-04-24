<?php

class Foo {
    public $a;

    public function bar() {
        $this->a = true ? @random_int(0, 100) : false;
    }
}

var_dump(error_reporting());
$c = new Foo();
$c->bar();
var_dump(error_reporting());

