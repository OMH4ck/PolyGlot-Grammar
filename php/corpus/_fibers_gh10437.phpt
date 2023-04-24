<?php

register_shutdown_function(function (): void {
    var_dump(Fiber::getCurrent());
});

$fiber = new Fiber(function (): never {
    trigger_error('Bailout in fiber', E_USER_ERROR);
});
$fiber->start();

