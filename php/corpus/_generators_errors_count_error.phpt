<?php

function gen() { yield; }

$gen = gen();

try {
    count($gen);
} catch (\TypeError $e) {
    echo $e->getMessage(), PHP_EOL;
}

