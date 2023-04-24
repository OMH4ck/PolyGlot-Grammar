<?php

class Test {
    public function __construct() {
        throw new Exception();
    }

    public function __destruct() {
        echo "__destruct\n";
    }
}

try {
    new Test();
} catch (Exception $e) {
    echo "Exception\n";
}
try {
    $ref = new ReflectionClass('Test');
    $obj = $ref->newInstance();
} catch (Exception $e) {
    echo "Exception\n";
}
try {
    $ref = new ReflectionClass('Test');
    $obj = $ref->newInstanceArgs([]);
} catch (Exception $e) {
    echo "Exception\n";
}

