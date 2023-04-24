<?php
interface Foo { }

interface Bar { }

class Baz implements Foo, Bar { }

class Qux {}

$rc1 = new ReflectionClass("Baz");
var_dump($rc1->getInterfaceNames());

$rc2 = new ReflectionClass("Qux");
var_dump($rc2->getInterfaceNames());
