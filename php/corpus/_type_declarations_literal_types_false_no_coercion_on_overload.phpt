<?php

class P {
    public function foo($v): array|bool {
        return $v;
    }
}

class C {
    public function foo($v): array|false {
        return $v;
    }
}

$p = new P();
$c = new C();

var_dump($p->foo(0));
try {
    var_dump($c->foo(0));
} catch (\TypeError $e) {
    echo $e->getMessage(), \PHP_EOL;
}

