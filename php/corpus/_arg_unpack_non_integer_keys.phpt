<?php
function foo(...$args) {
    var_dump($args);
}
function gen() {
    yield 1.23 => 123;
    yield "2.34" => 234;
}

try {
    foo(...gen());
} catch (Error $ex) {
    echo "Exception: " . $ex->getMessage() . "\n";
}

