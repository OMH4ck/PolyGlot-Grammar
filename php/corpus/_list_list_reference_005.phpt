<?php
class A {
    public $a = [['hello']];
    public $b = ['world'];

    public function getVar() {
        return $this->a;
    }

    public function &getVarRef() {
        return $this->a;
    }
}

class B {
    static $a = [['world']];
}

$a = new A();
[&$var] = $a->a;
[&$var_too] = $a->b;
var_dump($a->a);
var_dump($a->b);

$a = new A();
[&$var] = $a->getVar();
var_dump($a->a);

$a = new A();
[&$var] = $a->getVarRef();
var_dump($a->a);

[&$var] = B::$a;
var_dump(B::$a);
