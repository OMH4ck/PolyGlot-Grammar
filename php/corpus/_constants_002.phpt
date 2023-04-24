<?php

define('foo', new stdClass);
var_dump(foo);

define('bar', fopen(__FILE__, 'r'));
var_dump(bar);

