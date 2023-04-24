<?php

$fiber = new Fiber(function (): void {
    Fiber::suspend('test');
    throw new Exception('test');
});

$value = $fiber->start();
var_dump($value);

$fiber->resume($value);

