<?php

$fiber = new Fiber(function (): string {
    $value = Fiber::suspend("x");
    return $value;
});

$value = $fiber->start();
var_dump($value);
var_dump($fiber->resume($value . "y"));
var_dump($fiber->getReturn());

