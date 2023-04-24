<?php

enum TestEnum {
    case A;
}

$map = new WeakMap();
$map[TestEnum::A] = 'a string';
var_dump($map[TestEnum::A]);
var_dump($map[TestEnum::A]);

