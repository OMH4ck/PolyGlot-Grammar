<?php
class Foo
{
    public $foo;
}

function hydrate($properties, $object)
{
    foreach ($properties as $name => &$value) {
        $object->$name = &$value;
    }
};

$object = new Foo;

hydrate(['foo' => 123], $object);

$arrayCast = (array) $object;

$object->foo = 234;
var_dump(ReflectionReference::fromArrayElement($arrayCast, 'foo'));
echo $arrayCast['foo'];
