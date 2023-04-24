<?php

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

var_dump($arr["7"]);
var_dump($arr["7.5"]);
var_dump($arr["  7"]);
var_dump($arr["  7.5"]);
var_dump($arr["  7  "]);
var_dump($arr["  7.5  "]);
var_dump($arr["7  "]);
var_dump($arr["7.5  "]);
var_dump($arr["7str"]);
var_dump($arr["7.5str"]);
var_dump($arr["  7str"]);
var_dump($arr["  7.5str"]);
var_dump($arr["  7  str"]);
var_dump($arr["  7.5  str"]);
var_dump($arr["7  str"]);
var_dump($arr["7.5  str"]);
var_dump($arr["0xA"]);
var_dump($arr["0b10"]);
var_dump($arr["07"]);

echo "Done\n";
