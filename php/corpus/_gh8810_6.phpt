<?php

class A {
    public static function b() {
        throw new Exception();
    }
}

A
    ::
    b
    ();

