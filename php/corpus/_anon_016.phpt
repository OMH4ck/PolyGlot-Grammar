<?php
class C {
    function foo ($y = null) {
        static $x = null;
        if (!is_null($y)) {
            $x = [$y];
        }
        return $x;
    }
}
$c = new C();
$c->foo(new stdClass);
$d = new class extends C {};
var_dump($d->foo());
var_dump($d->foo(24));
var_dump($c->foo());
