<?php

$fiber = new Fiber(function (): void {
    $fiber = Fiber::getCurrent();
    echo "\nWithin Fiber:\n";
    var_dump($fiber->isStarted());
    var_dump($fiber->isRunning());
    var_dump($fiber->isSuspended());
    var_dump($fiber->isTerminated());

    $nested = new Fiber(function () use ($fiber): void {
        echo "\nWithin Nested Fiber:\n";
        var_dump($fiber->isStarted());
        var_dump($fiber->isRunning());
        var_dump($fiber->isSuspended());
        var_dump($fiber->isTerminated());
        Fiber::suspend();
    });

    $nested->start();

    Fiber::suspend();
});

echo "\nBefore Start:\n";
var_dump($fiber->isStarted());
var_dump($fiber->isRunning());
var_dump($fiber->isSuspended());
var_dump($fiber->isTerminated());

$fiber->start();

echo "\nAfter Start:\n";
var_dump($fiber->isStarted());
var_dump($fiber->isRunning());
var_dump($fiber->isSuspended());
var_dump($fiber->isTerminated());

$fiber->resume();

echo "\nAfter Resume:\n";
var_dump($fiber->isStarted());
var_dump($fiber->isRunning());
var_dump($fiber->isSuspended());
var_dump($fiber->isTerminated());

