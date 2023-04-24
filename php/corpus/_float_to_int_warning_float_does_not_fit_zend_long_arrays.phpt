<?php

$float = 10e120;
$string_float = (string) $float;

var_dump((int) $float);
var_dump((int) $string_float === PHP_INT_MAX);

$arrayConstant = [10e120 => 'Large float', (string) 10e120 => 'String large float'];
$arrayDynamic = [$float => 'Large float', $string_float => 'String large float'];

var_dump($arrayConstant);
var_dump($arrayDynamic);

$array = ['0', '1', '2'];
var_dump($array[10e120]);
var_dump($array[(string) 10e120]);
var_dump($array[$float]);
var_dump($array[$string_float]);

