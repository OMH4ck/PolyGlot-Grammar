<?php

class Test1 {
    public function method1() {
        $this->method2($x);
        var_dump($x);
    }
    public function method2() {}
}
class Test2 extends Test1 {
    public function method2(&$x = null) {
        ++$x;
    }
}
(new Test2)->method1();

