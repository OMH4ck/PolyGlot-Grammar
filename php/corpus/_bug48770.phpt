<?php

class A {
    public function func($arg) {
        echo "A::func called\n";
    }
}

class B extends A {
    public function func($arg) {
        echo "B::func called\n";
    }

    public function callFuncInParent($arg) {
        call_user_func_array(array($this, 'parent::func'), array($arg));
    }
}

class C extends B {
    public function func($arg) {
        echo "C::func called\n";
        parent::func($str);
    }
}

$c = new C;
$c->callFuncInParent('Which function will be called??');

