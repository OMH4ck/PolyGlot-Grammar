<?php

pcntl_async_signals(true);

pcntl_signal(SIGUSR1, function (): void {
    if (Fiber::getCurrent() !== null) {
        Fiber::suspend();
    }
});

$fiber = new Fiber(function (): void {
    echo "Fiber start\n";
    posix_kill(posix_getpid(), SIGUSR1);
    time_nanosleep(1);
    echo "Fiber end\n";
});

$fiber->start();

