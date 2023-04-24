<?php

enum Foo {
    case Bar;
}

enum IntFoo: int {
    case Bar = 42;
}

enum StringFoo: string {
    case Bar = 'Bar';
}

print_r(Foo::Bar);
print_r(IntFoo::Bar);
print_r(StringFoo::Bar);

