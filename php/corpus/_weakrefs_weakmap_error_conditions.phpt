<?php

$map = new WeakMap;
try {
    $map[1] = 2;
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump($map[1]);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    isset($map[1]);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    unset($map[1]);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
    $map[] = 1;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    $map[][1] = 1;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump($map[new stdClass]);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

var_dump($map->prop);
var_dump(isset($map->prop));
unset($map->prop);

try {
    $map->prop = 1;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    $map->prop[] = 1;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    $r =& $map->prop;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    serialize($map);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
try {
    unserialize('C:7:"WeakMap":0:{}');
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

