<?php

$fiber = new Fiber(function () {
    call_user_func(function () {
        $a = new class { public $next; };

        $b = new class {
            public $next;
            public function __destruct() {
                Fiber::suspend();
            }
        };

        $a->next = $b;
        $b->next = $a;
    });

    gc_collect_cycles();
});

$fiber->start();

