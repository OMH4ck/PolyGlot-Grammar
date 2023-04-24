<?php

enum Foo {
    case Bar;
    case Baz;
    case Qux;
}

$storage = new SplObjectStorage();
$storage[Foo::Bar] = 'Bar';
$storage[Foo::Baz] = 'Baz';

var_dump($storage[Foo::Bar]);
var_dump($storage[Foo::Baz]);

var_dump($storage->contains(Foo::Bar));
var_dump($storage->contains(Foo::Qux));

$serialized = serialize($storage);
var_dump($serialized);

$unserialized = unserialize($serialized);
var_dump($unserialized[Foo::Bar]);
var_dump($unserialized[Foo::Baz]);

