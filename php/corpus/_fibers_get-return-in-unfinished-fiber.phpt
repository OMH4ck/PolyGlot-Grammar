<?php

$fiber = new Fiber(fn() => Fiber::suspend(1));

var_dump($fiber->start());

$fiber->getReturn();

