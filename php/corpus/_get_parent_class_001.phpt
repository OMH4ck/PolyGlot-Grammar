<?php

interface ITest {
    function foo();
}

abstract class bar implements ITest {
    public function foo() {
        var_dump(get_parent_class());
    }
}

class foo extends bar {
    public function __construct() {
        var_dump(get_parent_class());
    }
}

$a = new foo;
$a->foo();

