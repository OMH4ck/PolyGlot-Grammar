<?php

enum Foo {
    case Bar;
}

echo new ReflectionEnum(Foo::class);

