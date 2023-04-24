<?php

class Test {
    function __destruct() {
        unset($GLOBALS['a']);
    }
}

function returnsVal() {
    return 42;
}
$a = new Test;
var_dump($a =& returnsVal());

