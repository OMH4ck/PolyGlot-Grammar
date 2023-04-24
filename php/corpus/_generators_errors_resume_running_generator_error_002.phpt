<?php
function gen() {
    $g = yield;
    $g->send($g);
}
$gen = gen();
try {
    $gen->send($gen);
} catch (Throwable $e) {
    echo $e->getMessage() . "\n";	
}
