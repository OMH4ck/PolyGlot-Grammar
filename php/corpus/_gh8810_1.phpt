<?php

function foo($bar, $baz) {
    throw new Exception();
}

foo
(
    'bar',
    'baz',
);

