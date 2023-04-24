<?php

class HasDtor {
    public function __destruct() {
        echo "In destruct\n";
        global $w, $all;
        for ($i = 0; $i < 10; $i++) {
            $v = new stdClass();
            $all[] = $v;
            $w[$v] = $i;
        }
    }
}
$all = [];
$w = new WeakMap();
$o = new stdClass();

$w[$o] = new HasDtor();
$w[$o] = 123;
var_dump($w);
