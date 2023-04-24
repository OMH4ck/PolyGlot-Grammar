<?php

final class Foo {
    public static $foo = [
        'foo' => DOES_NOT_EXIST,
    ];
}

new Foo();

