<?php

function gen(&$gen) {
    $a = new stdClass;
    $a->a = $a;
    $b = new stdClass;
    $b->b = $b;
    yield 1;
}

$gen = gen($gen);
var_dump($gen->current());
for ($i = 0; $i < 9999; $i++) {
    $a = new stdClass;
    $a->a = $a;
}
$gen->next();

