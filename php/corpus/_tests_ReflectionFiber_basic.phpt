<?php

$callable = function (): void {
    $reflection = new ReflectionFiber(Fiber::getCurrent());
    echo "\nWithin Fiber:\n";
    var_dump($reflection->getExecutingFile());
    var_dump($reflection->getExecutingLine());
    var_dump($reflection->getTrace());
    Fiber::suspend();
};

$fiber = new Fiber($callable);

$reflection = new ReflectionFiber($fiber);

echo "Before Start:\n";
var_dump($fiber === $reflection->getFiber());
var_dump($callable === $reflection->getCallable());

$fiber->start();

echo "\nAfter Start:\n";
var_dump($reflection->getExecutingFile());
var_dump($reflection->getExecutingLine());
var_dump($callable === $reflection->getCallable());
var_dump($reflection->getTrace());

$fiber->resume();

echo "\nAfter Resume:\n";
$reflection->getTrace();

