<?php

enum Foo {
    case Bar;
}

echo (new ReflectionEnumUnitCase(Foo::class, 'Bar'))->getEnum();

