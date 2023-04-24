<?php

class P {
    public function foo($v): array|bool {
        return $v;
    }
}

class C {
    public function foo($v): array|true {
        return $v;
    }
}

$p = new P();
$c = new C();

var_dump($p->foo(1));
try {
    var_dump($c->foo(1));
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}

