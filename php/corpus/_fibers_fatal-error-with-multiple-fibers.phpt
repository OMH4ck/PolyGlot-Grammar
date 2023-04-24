<?php

$fiber1 = new Fiber(function (): void {
    try {
        \Fiber::suspend(1);
    } finally {
        echo "not executed";
    }
});

$fiber2 = new Fiber(function (): void {
    \Fiber::suspend(2);
    trigger_error("Fatal error in fiber", E_USER_ERROR);
});

var_dump($fiber1->start());
var_dump($fiber2->start());
$fiber2->resume();

