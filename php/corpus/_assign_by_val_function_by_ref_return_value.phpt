<?php
$a = [&$a];
var_dump($a[0] =& returnsVal());
function returnsVal() {}
