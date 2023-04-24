<?php
$array = [];
$key = [];
try {
    $array[$key] += [$key];
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
var_dump($array);
