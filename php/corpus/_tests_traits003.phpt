<?php

abstract class foo {
}

trait bar {

}

final class baz {

}

$x = new ReflectionClass('foo');
var_dump($x->isTrait());

$x = new ReflectionClass('bar');
var_dump($x->isTrait());

$x = new ReflectionClass('baz');
var_dump($x->isTrait());

