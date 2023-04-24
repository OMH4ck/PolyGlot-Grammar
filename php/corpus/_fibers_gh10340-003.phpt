<?php

class C {
    public function __destruct() {
        echo __METHOD__, "\n";
    }
}

function f() {
    $c = new C();
    $y = 'a';
    $$y = Fiber::getCurrent();
    Fiber::suspend();
}

$fiber = new Fiber(function() {
    get_defined_vars();
    f();
});

$fiber->start();

print "1\n";

$fiber = null;
gc_collect_cycles();

print "2\n";
?>
