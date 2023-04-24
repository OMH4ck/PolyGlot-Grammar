<?php

class C
{
    #[A(1, X)]
    public const A = 1, B = 2;
}

const X = 2;

$rp1 = new ReflectionClassConstant('C', 'A');
$ra1 = $rp1->getAttributes()[0];
var_dump($ra1->getName(), $ra1->getArguments());
$rp2 = new ReflectionClassConstant('C', 'B');
$ra2 = $rp2->getAttributes()[0];
var_dump($ra2->getName(), $ra2->getArguments());

