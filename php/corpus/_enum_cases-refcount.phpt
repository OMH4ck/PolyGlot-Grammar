<?php

enum Foo {
    case Bar;
}

function callCases() {
    Foo::cases();
}

callCases();
debug_zval_dump(Foo::Bar);

