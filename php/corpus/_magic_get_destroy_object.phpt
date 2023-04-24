<?php
class Test {
    function __get($name) {
        $GLOBALS["x"] = null;
    }
}
$x = new Test;
var_dump($x->prop);

