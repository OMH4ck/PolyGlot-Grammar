<?php
function test(T &$a) {
}
function gen() {
    yield null;
}
try {
    test(...gen());
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
