<?php

$s = "123";
$s1 = "test";
$s2 = "45345some";

$s %= 22;
var_dump($s);

try {
    $s1 %= 11;
    var_dump($s1);
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

$s2 %= 33;
var_dump($s2);

echo "Done\n";
