<?php

function &test(): void {
}

$r =& test();
var_dump($r);

