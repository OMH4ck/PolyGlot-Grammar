<?php

try {
    $s = 'O:8:"stdClass":1:{s:1:"x";r:1;}';
    unserialize($s) % gc_collect_cycles();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

$a[]=&$a == $a=&$b > gc_collect_cycles();

