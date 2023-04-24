<?php

interface A {
    const FOO = 'foo';
}

interface B {
    const FOO = 'foo';
}

enum Foo implements A, B {}

