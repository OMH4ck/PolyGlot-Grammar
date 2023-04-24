<?php

class A {
    const C = self::UNKNOWN;
}
try {
    echo new ReflectionClass(A::class);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

