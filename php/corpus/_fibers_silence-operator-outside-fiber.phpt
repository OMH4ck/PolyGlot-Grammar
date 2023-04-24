<?php

$fiber = @new Fiber(function (): void {
    trigger_error("Warning A", E_USER_WARNING);
    Fiber::suspend();
    trigger_error("Warning C", E_USER_WARNING);
});

@$fiber->start();

trigger_error("Warning B", E_USER_WARNING);

@$fiber->resume();

trigger_error("Warning D", E_USER_WARNING);

