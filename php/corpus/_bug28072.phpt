<?php
define("FIRST_KEY", "a");
define("THIRD_KEY", "c");


function test()
{
        static $arr = array(
                FIRST_KEY => "111",
                "b" => "222",
                THIRD_KEY => "333",
                "d" => "444"
        );
        print_r($arr);
}

function test2()
{
        static $arr = array(
                FIRST_KEY => "111",
                "a" => "222",
                "c" => "333",
                THIRD_KEY => "444"
        );
        print_r($arr);
}

test();
test2();
