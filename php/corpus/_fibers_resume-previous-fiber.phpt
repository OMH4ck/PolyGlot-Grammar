<?php

$fiber = new Fiber(function (): void {
    $fiber1 = Fiber::getCurrent();

    $fiber2 = new Fiber(function () use ($fiber1): void {
        $fiber1->resume();
    });

    $fiber2->start();
});

$fiber->start();

