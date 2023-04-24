<?php
class C {
    const myConst = 1;
}

$rc = new ReflectionClass("C");
echo "Check invalid params:\n";
var_dump($rc->hasConstant(1));
var_dump($rc->hasConstant(1.5));
var_dump($rc->hasConstant(true));
