<?php
function test() {
    return [new stdClass => null];
}
try {
    test();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
