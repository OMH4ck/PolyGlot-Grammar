<?php

enum Foo {
    case Bar;
}

var_dump(unserialize('E:7:"Foo:Baz";'));

