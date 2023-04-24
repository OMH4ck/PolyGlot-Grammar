<?php
try {
    $rf = new ReflectionFunction('is_file');
    var_dump($rf->isDisabled());
} catch (ReflectionException $e) {
    echo $e->getMessage(), "\n";
}

$rf = new ReflectionFunction('is_string');
var_dump($rf->isDisabled());
