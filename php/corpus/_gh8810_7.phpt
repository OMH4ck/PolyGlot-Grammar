<?php

class A {
    public function __construct() {
        throw new Exception();
    }
}

new
    A
    ();

