<?php
$closure = function ($b = 0) {};
$ro = new ReflectionObject($closure);
$rm = $ro->getMethod('__invoke');
echo $rm, "\n";

$rp = $rm->getParameters()[0];
var_dump($rp->isDefaultValueAvailable());
try {
    var_dump($rp->getDefaultValue());
} catch (ReflectionException $e) {
    echo $e->getMessage(), "\n";
}
