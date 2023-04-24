<?php

class Foo {}

class Bar extends Foo {}

$rc = new ReflectionClass("Bar");
$parent = $rc->getParentClass();
$grandParent = $parent->getParentClass();
var_dump($parent, $grandParent);
