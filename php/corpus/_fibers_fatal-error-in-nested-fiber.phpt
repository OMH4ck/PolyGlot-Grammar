<?php

$fiber = new Fiber(function (): void {
    $fiber = new Fiber(function (): void {
        \Fiber::suspend(2);
        trigger_error("Fatal error in nested fiber", E_USER_ERROR);
    });

    var_dump($fiber->start());

    \Fiber::suspend(1);

    $fiber->resume();
});

var_dump($fiber->start());

$fiber->resume();

