<?php

$fiber = new Fiber(fn() => 'test');
var_dump($fiber->isStarted());
var_dump($fiber->start());
var_dump($fiber->getReturn());
var_dump($fiber->isTerminated());

