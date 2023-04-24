<?php

declare(ticks=1);

register_tick_function(function (): void {
    if (Fiber::getCurrent() !== null) {
        Fiber::suspend();
    }
});

$fiber = new Fiber(function (): void {
    echo "1\n";
    echo "2\n";
    echo "3\n";
});

$fiber->start();

