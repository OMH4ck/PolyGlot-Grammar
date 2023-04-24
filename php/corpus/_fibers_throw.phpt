<?php

$fiber = new Fiber(function (): void {
    Fiber::suspend('test');
});

$value = $fiber->start();
var_dump($value);

$fiber->throw(new Exception('test'));

