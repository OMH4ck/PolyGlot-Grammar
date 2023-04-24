<?php

function pollute_stack_and_suspend($a = 1, $b = 2, $c = 3) {
    Fiber::suspend();
}

$f = new Fiber(function() use (&$f) {
    pollute_stack_and_suspend();
    (function() {
        (function() {
            (new Fiber(function() {
                gc_collect_cycles();
                echo "Success\n";
            }))->start();
        })();
    })();
});
$f->start();
$f->resume();

