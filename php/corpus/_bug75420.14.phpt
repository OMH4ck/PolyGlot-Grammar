<?php
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}

$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
var_dump($obj);
