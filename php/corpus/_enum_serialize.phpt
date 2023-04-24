<?php

enum Foo {
    case Bar;
}

echo serialize(Foo::Bar);

