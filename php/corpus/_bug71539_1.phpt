<?php
$x = (object)['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7];
$x->h =& $x->i;
$x->h = 42;
var_dump($x);
