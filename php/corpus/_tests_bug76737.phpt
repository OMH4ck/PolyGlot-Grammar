<?php

try {
    $r = new ReflectionClass('stdClass');
    var_dump(serialize($r));
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
try {
    $s = 'C:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
try {
    $s = 'O:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
