<?php

function run () {
    $x = 4;

    $lambda1 = function () use ($x) {
        echo "$x\n";
    };

    $lambda2 = function () use (&$x) {
        echo "$x\n";
    };

    $lambda1();
    $lambda2();
    $x++;
    $lambda1();
    $lambda2();
}

run();

echo "Done\n";
