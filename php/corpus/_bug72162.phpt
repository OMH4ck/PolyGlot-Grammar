<?php
error_reporting(E_ALL);
$var11 = new StdClass();

try {
    $var16 = error_reporting($var11);
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}
