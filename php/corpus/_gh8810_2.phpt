<?php

class A {
    public function b() {
        throw new Exception();
    }
}

(new A())
    ->
    b
    ();

