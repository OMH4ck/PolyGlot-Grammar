<?php

function suspend_fiber(): void
{
    \Fiber::suspend();
    throw new Exception;
}

$fiber = new Fiber(function (): void {
    suspend_fiber();
});

$fiber->start();

$fiber->resume();

