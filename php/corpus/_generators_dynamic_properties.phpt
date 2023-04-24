<?php

function gen() {
    yield;
}

$gen = gen();
try {
    $gen->prop = new stdClass;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

