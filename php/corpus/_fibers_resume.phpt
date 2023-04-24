<?php

$fiber = new Fiber(function (): void {
    $value = Fiber::suspend(1);
    var_dump($value);
});

$value = $fiber->start();
var_dump($value);
$fiber->resume($value + 1);

