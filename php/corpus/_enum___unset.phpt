<?php

enum Foo {
    case Bar;

    public function __unset($property) {
        return;
    }
}

