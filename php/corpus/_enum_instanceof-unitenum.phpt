<?php

enum Foo {
    case Bar;
}

class Baz {}

var_dump(Foo::Bar instanceof UnitEnum);
var_dump((new Baz()) instanceof UnitEnum);

