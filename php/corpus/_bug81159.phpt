<?php

$s = 'Hello';
$o = new stdClass();
try {
    $s[$o] = 'A';
} catch (\Throwable $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump($s[$o]);
} catch (\Throwable $e) {
    echo $e->getMessage(), "\n";
}
