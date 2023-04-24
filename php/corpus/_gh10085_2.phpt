<?php
$tmp = [0];
unset($tmp[0]);
$i = [$tmp, 0];
unset($tmp);
$ref = &$i;
$i[0] += $ref;
var_dump($i);
