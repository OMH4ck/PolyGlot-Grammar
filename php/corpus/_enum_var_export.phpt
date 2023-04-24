<?php

enum Foo {
    case Bar;
}

var_export(Foo::Bar);
// Should not warn about recursion
echo "\n";
echo str_replace(" \n", "\n", var_export([Foo::Bar], true));

