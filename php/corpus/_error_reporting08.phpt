<?php

error_reporting(E_ALL & ~E_DEPRECATED);

function foo1($arg) {
}

function foo2($arg) {
}

function foo3() {
    error_reporting(E_ALL);
    echo $undef3;
    throw new Exception("test");
}

try {
    @foo1(@foo2(@foo3()));
} catch (Exception $e) {
}

var_dump(error_reporting());

echo "Done\n";
