<?php
$a = [0,1,2,3,4,5,6];
$a[200] =& $a[100];
$a[100] =42;
var_dump($a);
