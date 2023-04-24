<?php

enum Foo {
    case Bar;
}

const Beep = Foo::Bar;

class Test {
    const Beep = Foo::Bar;
}

var_dump(Beep);
var_dump(Test::Beep);

