<?php

$callback = function () {};
ini_set("fiber.stack_size", "");
$fiber = new Fiber($callback);
try {
    $fiber->start();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

