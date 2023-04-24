<?php

$bar = new DateTime();
$args = [1, &$bar];

$function = function (int &$foo, DateTimeInterface &$bar) {};

(new ReflectionFunction($function))->invokeArgs($args);

