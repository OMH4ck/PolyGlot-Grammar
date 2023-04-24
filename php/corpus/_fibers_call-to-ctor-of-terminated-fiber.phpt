<?php

$fiber = new Fiber(function () {
    return 123;
});

var_dump($fiber->start());
var_dump($fiber->getReturn());

$fiber->__construct(function () {
    return 321;
});

