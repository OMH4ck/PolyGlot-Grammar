<?php

$ref = new ReflectionFunction('array_unique');
var_dump(count($ref->getParameters()));
