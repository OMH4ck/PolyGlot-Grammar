<?php

var_dump(Fiber::getCurrent());

$fiber = new Fiber(function (): void {
    var_dump(Fiber::getCurrent());
});

$fiber->start();

