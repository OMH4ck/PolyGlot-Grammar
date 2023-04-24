<?php
/* This is working on a copy of $GLOBALS, so nothing interesting happens here. */
$a = new ArrayObject($GLOBALS);
$x = "ok\n";
echo $x;
$a->offsetUnset('x');
echo $x;
echo "ok\n";
