<?php

class C
{
    #[A(1, X)]
    public $x, $y;
}

const X = 2;

$rp1 = new ReflectionProperty('C', 'x');
$ra1 = $rp1->getAttributes()[0];
var_dump($ra1->getName(), $ra1->getArguments());
$rp2 = new ReflectionProperty('C', 'y');
$ra2 = $rp2->getAttributes()[0];
var_dump($ra2->getName(), $ra2->getArguments());

