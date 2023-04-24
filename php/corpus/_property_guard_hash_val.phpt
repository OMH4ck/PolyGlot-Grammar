<?php
class Test {
    function __get($var) {
        return $this->{$var.''};
    }
}

$test = new Test;
var_dump($test->x);
