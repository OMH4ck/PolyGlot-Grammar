<?php
class A {}
$ro = new ReflectionObject(new A);

var_dump($ro->isSubclassOf('X'));

