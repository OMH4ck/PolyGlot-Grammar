<?php
class A {
    function __destruct() {
        try {
            throw new Exception("2");
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }
}
class B {
    public $a;
    function __construct() {
        $this->a = new A();
        throw new Exception("1");
    }
}
try {
    $b = new B();
} catch(Exception $e) {
    echo $e->getMessage() . "\n";
}
