<?php

$fiber = new Fiber(function (): void {
    $fiber = new Fiber(function (int $x, int $y): void {
        Fiber::suspend($x + $y);
        throw new Exception('test');
    });

    $value = $fiber->start(1, 2);
    var_dump($value);
    $fiber->resume($value);
});

$fiber->start();

