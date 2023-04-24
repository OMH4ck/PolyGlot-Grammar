<?php

$v = new SensitiveParameterValue('secret');

echo "# var_dump() / debug_zval_dump() / print_r()", PHP_EOL;
var_dump($v);
debug_zval_dump($v);
print_r($v);
echo PHP_EOL;

echo "# var_export()", PHP_EOL;
echo var_export($v, true), PHP_EOL;
echo PHP_EOL;

echo "# (array) / json_encode()", PHP_EOL;
var_dump((array)$v);
var_dump(json_encode($v));
echo PHP_EOL;

echo "# ->getValue()", PHP_EOL;
var_dump($v->getValue());

