<?php

function f() {
}

class C {
    public function __construct(public mixed $x) {
    }
    public function __invoke() {
    }
    public function __destruct() {
        echo __METHOD__, "\n";
    }
}

$gen = function () use (&$gen) {
    (new C($gen))(yield);
};

$gen = $gen();

foreach ($gen as $value) {
    break;
}

$gen = null;

gc_collect_cycles();

?>
