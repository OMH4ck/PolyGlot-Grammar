<?php

$fiber = new Fiber(function () {
    try {
        Fiber::suspend('in try');
    } catch (Exception $exception) {
    }

    Fiber::suspend('after catch');
});

var_dump($fiber->start());

var_dump($fiber->throw(new Exception));

var_dump($fiber->resume());

