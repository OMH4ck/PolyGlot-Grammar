<?php

$a = new stdClass;
$a->a =& $a;
var_dump($a->a = 0);

