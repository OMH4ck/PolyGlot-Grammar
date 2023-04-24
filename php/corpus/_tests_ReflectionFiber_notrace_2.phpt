<?php

namespace test;

$f = new \Fiber(fn() => call_user_func(["Fiber", "suspend"]));
$f->start();

$reflection = new \ReflectionFiber($f);

var_dump($reflection->getExecutingFile());
var_dump($reflection->getExecutingLine());
var_dump($reflection->getTrace());

