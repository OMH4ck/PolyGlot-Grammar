<?php

function &gen() {
    yield $v = 0;
    yield $v = 1;
}

foreach (gen() as $v) {
    var_dump($v);
}

