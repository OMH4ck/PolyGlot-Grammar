<?php
class A {
    public $b;
}

class B {
    public $a;
}

class C {
    public function __destruct() {
        if (isset($GLOBALS["a"])) {
            unset($GLOBALS["array"]);
            unset($GLOBALS["a"]);
        }
    }
}

$a = new A;
$a->b = new B;
$a->b->a = $a;

$i = 0;

$c = new A;
$array = array($c);
unset($c);

while ($i++ < 9998) {
    $t = [];
    $t[] = &$t;
    unset($t);
}
$t = [new C];
$t[] = &$t;
unset($t);
unset($a);

var_dump(gc_collect_cycles());
