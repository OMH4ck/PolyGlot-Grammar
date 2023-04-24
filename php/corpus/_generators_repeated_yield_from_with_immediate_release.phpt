<?php

function gen() {
    yield 42;
}
function yield_from($gen) {
    yield from $gen;
}
$gen = gen();
var_dump(yield_from($gen)->current());
var_dump(yield_from($gen)->current());

