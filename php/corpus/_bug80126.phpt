<?php

interface I {
    public function method(): I;
}

abstract class A implements I {
    public function method(): I { }
}

class C extends A { }

class C2 extends C {
    public function method(): C2 { }
}

?>
