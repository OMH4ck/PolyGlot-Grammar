<?php

$str = "foo";

list($a, $b, $c) = $str;

var_dump($a, $b, $c);

print "----\n";

$int = 1;

list($a, $b, $c) = $int;

var_dump($a, $b, $c);

print "----\n";

$obj = new stdClass;

list($a, $b, $c) = $obj;

var_dump($a, $b, $c);

print "----\n";

$arr = array(1, 2, 3);

list($a, $b, $c) = $arr;

var_dump($a, $b, $c);

