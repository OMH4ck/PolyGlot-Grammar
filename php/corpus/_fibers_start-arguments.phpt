<?php

$fiber = new Fiber(function (int $x): int {
    return $x + Fiber::suspend($x);
});

$x = $fiber->start(1);
$fiber->resume(0);
var_dump($fiber->getReturn());

$fiber = new Fiber(function (int $x): int {
    return $x + Fiber::suspend($x);
});

$fiber->start('test');

