<?php

#[MyAttribute(
    "there",
    "are",
    "many",
    "arguments",
)]
class Foo { }

$ref = new \ReflectionClass(Foo::class);
$attr = $ref->getAttributes()[0];
var_dump($attr->getName(), $attr->getArguments());

