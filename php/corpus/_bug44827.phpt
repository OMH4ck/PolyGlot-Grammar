<?php

try {
    define('foo::bar', 1);
} catch (ValueError $exception) {
    echo $exception->getMessage() . "\n";
}

try {
    define('::', 1);
} catch (ValueError $exception) {
    echo $exception->getMessage() . "\n";
}

