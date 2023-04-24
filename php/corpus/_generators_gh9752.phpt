<?php

function f(...$x) {
}

function g() {
    f(a: 1, b: yield);
};

$gen = g();

foreach ($gen as $value) {
    break;
}

?>
