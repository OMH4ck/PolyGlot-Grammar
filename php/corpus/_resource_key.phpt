<?php

$r = fopen(__FILE__, 'r');
$a = [];
echo "Assign:";
$a[$r] = 1;
echo "Add assign:";
$a[$r] += 1;
echo "Inc:";
$a[$r]++;
echo "Get:";
var_dump($a[$r]);
echo "Isset:";
var_dump(isset($a[$r]));
echo "Unset:";
unset($a[$r]);

