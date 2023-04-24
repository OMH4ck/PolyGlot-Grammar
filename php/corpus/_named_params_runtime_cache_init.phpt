<?php

class Test {
    public static function method($a = FOO, $b = 1) {
        echo "a = $a, b = $b\n";
    }
}

define('FOO', 42);
call_user_func(['Test', 'method'], b: 0);

