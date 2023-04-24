<?php

register_shutdown_function(function (): void {
    $fiber = new Fiber(function (): int {
        Fiber::suspend(1);
        Fiber::suspend(2);
        return 3;
    });

    var_dump($fiber->start());
    var_dump($fiber->resume());
    var_dump($fiber->resume());
    var_dump($fiber->getReturn());
});

