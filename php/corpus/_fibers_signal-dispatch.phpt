<?php

pcntl_signal(SIGUSR1, function (): void {
    if (Fiber::getCurrent() !== null) {
        Fiber::suspend();
    }
});

$fiber = new Fiber(function (): void {
    echo "Fiber start\n";

    posix_kill(posix_getpid(), SIGUSR1);

    try {
        pcntl_signal_dispatch();
    } catch (FiberError $e) {
        Fiber::suspend($e);
    }

    echo "Fiber end\n";
});

$e = $fiber->start();

echo $e, "\n";

$fiber->resume();

