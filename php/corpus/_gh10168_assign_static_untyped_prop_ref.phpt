<?php

class Test {
    static $test;

    function __destruct() {
        Test::$test = null;
    }
}

Test::$test = new Test;
$tmp = new Test;
var_dump(Test::$test = &$tmp);

