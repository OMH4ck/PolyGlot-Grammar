<?php

class A {
    private $x;
    private static $xs = 10;

    public function __construct($v) {
        $this->x = $v;
    }

    public function getIncrementor() {
        return function() { return ++$this->x; };
    }
    public function getStaticIncrementor() {
        return static function() { return ++static::$xs; };
    }
}

$a = new A(20);

$ca = $a->getIncrementor();
$cas = $a->getStaticIncrementor();

try {
    $ca->bindTo($a, array());
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

$cas->bindTo($a, 'A');

