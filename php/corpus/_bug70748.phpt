<?php
$ini = '[${ 	';

$ini_file = __DIR__ . "/bug70748.ini";

file_put_contents($ini_file, $ini);

var_dump(parse_ini_file($ini_file));
