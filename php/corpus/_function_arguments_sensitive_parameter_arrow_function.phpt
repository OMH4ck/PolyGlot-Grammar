<?php

$test = fn (#[SensitiveParameter] $sensitive) => (new Exception)->getTrace();

var_dump($test('sensitive'));

