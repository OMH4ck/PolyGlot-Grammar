<?php
$array = [];
$array[''][0] =& $array[0];
$array[0] = 42;
var_dump($array);
