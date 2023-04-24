<?php

function testReflectionIsArray(array $a, ?array $b, iterable $c, array|string $d) {}

$reflection = new ReflectionFunction('testReflectionIsArray');

foreach ($reflection->getParameters() as $parameter) {
    var_dump($parameter->isArray());
}
