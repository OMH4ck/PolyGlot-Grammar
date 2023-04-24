<?php

class_alias('stdclass', 'foo');
$foo = new foo();
var_dump($foo);

