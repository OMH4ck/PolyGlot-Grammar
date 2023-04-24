<?php

class Test {
    static $test;

    function __destruct() {
        Test::$test = null;
    }
}

Test::$test = new Test;
var_dump(Test::$test = new Test);

