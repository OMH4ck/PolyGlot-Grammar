<?php

$a = array(1,2,3);
$b = array(1);

try {
    var_dump($a / $b);
} catch (Error $e) {
    echo "\nException: " . $e->getMessage() . "\n";
}

$c = $a / $b;
var_dump($c);

echo "Done\n";
