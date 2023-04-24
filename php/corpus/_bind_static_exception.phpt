<?php
class Test {
    function __destruct() {
        throw new Exception("Foo");
    }
}
try {
    $new = new Test;
    static $new;
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
