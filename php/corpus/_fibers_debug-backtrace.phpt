<?php

function inner_function(): void
{
    debug_print_backtrace();
}

$fiber = new Fiber(function (): void {
    inner_function();
});

$fiber->start();

