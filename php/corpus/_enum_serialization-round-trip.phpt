<?php

enum Foo {
    case Bar;
}

var_dump(Foo::Bar === unserialize(serialize(Foo::Bar)));

