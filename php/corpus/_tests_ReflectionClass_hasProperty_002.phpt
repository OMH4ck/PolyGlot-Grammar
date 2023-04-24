<?php
class C {
    public $a;
}

$rc = new ReflectionClass("C");
echo "Check invalid params:\n";
var_dump($rc->hasProperty(1));
var_dump($rc->hasProperty(1.5));
var_dump($rc->hasProperty(true));
