<?php

class B {
    const X = self::UNKNOWN;
}

try {
    echo new ReflectionClassConstant('B', 'X');
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

