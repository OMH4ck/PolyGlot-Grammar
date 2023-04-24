<?php

trait Foo {
    public function __construct() {
        echo "Evil code\n";
    }
}

enum Bar {
    use Foo;
    case Baz;
}

var_dump(Bar::Baz);

