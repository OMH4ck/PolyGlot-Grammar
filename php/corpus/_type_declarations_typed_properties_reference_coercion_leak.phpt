<?php

class Test {
    public string $x;
    public string $y;
}

$test = new Test;
$ref = "";
$test->x =& $ref;
$test->y =& $ref;
$val = 42;
$ref = $val;
var_dump($ref, $val);

