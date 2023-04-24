<?php
$i = [[], 0];
$ref = &$i;
$i[0] += $ref;
var_dump($i);
