<?php

$fiber = new Fiber(function() {
    try {
        Fiber::suspend();
    } finally {
        echo "finally\n";

        $fiber = new Fiber(function() {
            echo "not executed\n";
        });

        $fiber->start();
    }
});

$fiber->start();

