<?php

class foo {
    public function __construct() {
        throw new Exception('foobar');
    }
}

try {
    $X = (new foo)->Inexistent(3);
} catch (Exception $e) {
    var_dump($e->getMessage()); // foobar
}

