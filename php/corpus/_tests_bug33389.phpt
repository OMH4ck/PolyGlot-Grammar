<?php
define ('foobar', 1);
class Test {
    function foo1($arg=foobar) {
    }
    function foo2($arg=null) {
    }
    function foo3($arg=false) {
    }
    function foo4($arg='foo') {
    }
    function foo5($arg=1) {
    }
    function bar($arg) {
    }
    function foo() {
    }
}
echo new ReflectionClass('Test');
