<?php

#[Foo, Bar(a: "foo", b: 1234), Baz("foo", 1234), X(NO_ERROR), Y(new stdClass)]
function foo() {}

$refl = new ReflectionFunction('foo');
echo $refl->getAttributes()[0];
echo $refl->getAttributes()[1];
echo $refl->getAttributes()[2];
echo $refl->getAttributes()[3];
echo $refl->getAttributes()[4];

