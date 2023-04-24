<?php

class A {}
try {
    new ReflectionParameter([
        A::class,
        new class { public function __toString() { return 'method'; } }
    ], 'param');
} catch (ReflectionException $e) {
    echo $e->getMessage(), "\n";
}

