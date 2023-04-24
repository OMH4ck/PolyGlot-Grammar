<?php

$fiber = new Fiber(function (): void {
    trigger_error("Fatal error in fiber", E_USER_ERROR);
});

$fiber->start();

