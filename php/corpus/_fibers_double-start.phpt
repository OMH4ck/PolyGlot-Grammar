<?php

$fiber = new Fiber(function (): void {
    Fiber::suspend();
});

$fiber->start();

$fiber->start();

