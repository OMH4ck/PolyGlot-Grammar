<?php

$gen = function() {
    yield;
    throw new Exception; // Just to create a live range
};
$a = new stdclass;
$a->a = $a;
$a->gen = $gen();

?>
