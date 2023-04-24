<?php

function suspend_fiber(int $level): void
{
    if ($level >= 10) {
        $value = \Fiber::suspend($level);
        failing_function($value);
    }

    suspend_fiber($level + 1);
}

function failing_function(string $value): never
{
    throw_exception();
}

function throw_exception(): never
{
    throw new Exception;
}

$fiber = new Fiber(function (): void {
    suspend_fiber(0);
});

$fiber->start();

$fiber->resume('test');

