<?php
$a = [1, 2];
unset($a[1], $a[0]);
$b = $a;

$a[] = 3;
$b[] = 4;

var_dump($a, $b);
