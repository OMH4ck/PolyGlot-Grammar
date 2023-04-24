<?php

class C {
    function __destruct() {
        echo __METHOD__, "\n";
    }
}

class D {
    function __destruct() {
        echo __METHOD__, "\n";
    }
}

$gen = function ($c) use (&$gen) {
    new D($gen, yield);
};

$gen = $gen(new C());

foreach ($gen as $value) {
    break;
}

$gen = null;

gc_collect_cycles();

?>
