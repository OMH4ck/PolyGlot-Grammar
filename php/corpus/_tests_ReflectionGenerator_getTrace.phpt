<?php

function foo() {
    yield 1;
    yield 2;
}

function bar()
{
    yield from foo();
}

function baz()
{
    yield from bar();
}

$gen = baz();
$gen->valid();

var_dump((new ReflectionGenerator($gen))->getTrace());

