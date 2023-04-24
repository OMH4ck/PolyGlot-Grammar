<?php
function test($a) {
    $b = "x";
    $a->$b = 1;
    $a->$b &= 1;
    var_dump($a->$b);
}
test(new stdClass);
