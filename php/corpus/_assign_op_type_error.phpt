<?php

$x = [];
try {
    $x += "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $x -= "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $x *= "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $x /= "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $x **= "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $x %= "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $x <<= "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $x >>= "1";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

