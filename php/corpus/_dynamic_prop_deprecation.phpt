<?php

class Test {}

$obj = new Test;
$obj->prop = 1; // Deprecated
$obj->prop = 1; // Ok
$obj->prop2 += 1; // Deprecated
$obj->prop2 += 1; // Ok
$obj->prop3++; // Deprecated
$obj->prop3++; // Ok
$obj->prop4[] = 1; // Deprecated
$obj->prop4[] = 1; // Ok
isset($obj->prop5); // Ok
unset($obj->prop6); // Ok

// stdClass should not throw deprecation.
$obj = new stdClass;
$obj->prop = 1;

// Classes with #[AllowDynamicProperties] should not throw deprecation.
#[AllowDynamicProperties]
class Test2 {}
class Test3 extends Test2 {}

$obj = new Test2;
$obj->prop = 1;

$obj = new Test3;
$obj->prop = 1;

