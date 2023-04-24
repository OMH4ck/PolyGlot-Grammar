<?php

class Test {
    public int $prop;

    public function __get($name) {
        echo "__get() called\n";
        return 0;
    }
}

$test = new Test;
try {
    $test->prop;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    $test->prop = "foo";
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    $test->prop;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

