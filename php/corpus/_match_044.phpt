<?php
$x = 2;
var_dump(match ($x) {
    2,2 => 'x',
    default => 'y',
});
