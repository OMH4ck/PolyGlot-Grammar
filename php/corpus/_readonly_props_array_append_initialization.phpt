<?php

class C {
    public readonly array $a;

    public function init() {
        $this->a[] = 1;
        var_dump($this->a);
    }
}


function init() {
    $c = new C;
    $c->a[] = 1;
    var_dump($c->a);
}

try {
    (new C)->init();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    init();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

