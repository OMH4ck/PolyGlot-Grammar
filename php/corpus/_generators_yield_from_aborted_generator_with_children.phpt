<?php

function from() {
    yield 0;
    throw new Exception();
}
function gen($gen) {
    yield from $gen;
}

$gen1 = from();
$gen2 = gen($gen1);
$gen3 = gen($gen1);
try {
    $gen2->next();
} catch (Exception $e) {
    unset($gen2);
}
$gen3->next();

