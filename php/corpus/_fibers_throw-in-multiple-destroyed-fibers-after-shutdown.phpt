<?php

$fiber = new Fiber(function (): void {
    $fiber1 = new Fiber(function (): void {
        try {
            Fiber::suspend();
        } finally {
            throw new Exception('test1');
        }
    });

    $fiber1->start();

    $fiber2 = new Fiber(function (): void {
        try {
            Fiber::suspend();
        } finally {
            throw new Exception('test2');
        }
    });

    $fiber2->start();

    Fiber::suspend();
});

$fiber->start();

echo "done\n";

