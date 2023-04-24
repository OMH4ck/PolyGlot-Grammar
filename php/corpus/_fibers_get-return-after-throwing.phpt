<?php

$fiber = new Fiber(fn() => throw new Exception('test'));

try {
    $fiber->start();
} catch (Exception $exception) {
    echo $exception->getMessage(), "\n";
}

$fiber->getReturn();

