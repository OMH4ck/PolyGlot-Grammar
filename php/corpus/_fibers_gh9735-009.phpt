<?php

class C {
    public function __destruct() {
        echo __METHOD__, "\n";
    }
}

function f($a, $b) {
}

function g() {
    g(Fiber::suspend());
}

$fiber = new Fiber(function () {
    $c = new C();

    f(Fiber::getCurrent(), g());
});

print "1\n";

$fiber->start();
gc_collect_cycles();

print "2\n";

$fiber = null;
gc_collect_cycles();

print "3\n";

