<?php

$fiber = new Fiber(function (): void {
    Fiber::suspend();
});

$reflection = new ReflectionFiber($fiber);

try {
    $reflection->getTrace();
} catch (Error $error) {
    echo $error->getMessage(), "\n";
}

try {
    $reflection->getExecutingFile();
} catch (Error $error) {
    echo $error->getMessage(), "\n";
}

try {
    $reflection->getExecutingLine();
} catch (Error $error) {
    echo $error->getMessage(), "\n";
}

$fiber->start();

var_dump($reflection->getExecutingFile());
var_dump($reflection->getExecutingLine());

$fiber->resume();

try {
    $reflection->getTrace();
} catch (Error $error) {
    echo $error->getMessage(), "\n";
}

try {
    $reflection->getExecutingFile();
} catch (Error $error) {
    echo $error->getMessage(), "\n";
}

try {
    $reflection->getExecutingLine();
} catch (Error $error) {
    echo $error->getMessage(), "\n";
}

try {
    $reflection->getCallable();
} catch (Error $error) {
    echo $error->getMessage(), "\n";
}

