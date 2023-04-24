<?php

$fiber = new Fiber(function &() {
    Fiber::suspend();
    return $var;
});

$fiber->start();
$fiber->resume();
var_dump($fiber->getReturn());

