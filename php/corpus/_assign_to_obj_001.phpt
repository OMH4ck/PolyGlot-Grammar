<?php
function &a($i) {
    $a = "str". $i ."ing";
    return $a;
}

class A {
    public $a;
    public function test() {
        $this->a = a(1);
        unset($this->a);
    }
}

$a = new A;

$a->test();
$a->test();
echo "okey";
