<?php

enum Alpha {
    case Foo;
}

class Bravo {
    public const C = [Alpha::Foo => 3];
}

new Bravo();

