<?php
class Test {
    public function __isset($x) { $GLOBALS["name"] = 24; return true; }
    public function __get($x) { var_dump($x); return 42; }
}

$obj = new Test;
$name = "foo";
$name = str_repeat($name, 2);
var_dump(empty($obj->$name));
