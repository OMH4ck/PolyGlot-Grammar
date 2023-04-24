<?php
class ObjectOne { }

$objectClass = new ReflectionClass('ObjectOne');
var_dump($objectClass->isSubclassOf($objectClass));
