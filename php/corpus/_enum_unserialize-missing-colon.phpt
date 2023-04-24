<?php

enum Foo {
    case Bar;
}

var_dump(unserialize('E:6:"FooBar";'));

