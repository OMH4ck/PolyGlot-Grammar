<?php

var_dump(zend_test_zend_call_stack_get());

class Test1 {
    public function __destruct() {
        new Test1;
    }
}

$callback = function (): int {
    try {
        new Test1;
    } catch (Error $e) {
        return count($e->getTrace());
    }

    throw new \Exception();
};

ini_set('fiber.stack_size', '400K');
$fiber = new Fiber($callback);
$fiber->start();
$depth1 = $fiber->getReturn();

ini_set('fiber.stack_size', '200K');
$fiber = new Fiber($callback);
$fiber->start();
$depth2 = $fiber->getReturn();

var_dump($depth1 > $depth2);

