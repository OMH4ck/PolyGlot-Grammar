<?php

try {
    new ReflectionReference();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    ReflectionReference::fromArrayElement(new stdClass, "test");
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
    ReflectionReference::fromArrayElement([], []);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
    $ary = [0, 1, 2];
    ReflectionReference::fromArrayElement($ary, 3);
} catch (ReflectionException $e) {
    echo $e->getMessage(), "\n";
}

try {
    $ary = [&$ary];
    $ref = ReflectionReference::fromArrayElement($ary, 0);
    var_dump(serialize($ref));
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(unserialize('O:19:"ReflectionReference":0:{}'));
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
