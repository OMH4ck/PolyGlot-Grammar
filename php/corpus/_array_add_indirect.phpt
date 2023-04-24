<?php

$x = 1;
$ary = ['y' => 1];
$ary += $GLOBALS;
var_dump($ary['x']);
$x = 2;
var_dump($ary['x']);

