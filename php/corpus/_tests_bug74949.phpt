<?php

$f = function () {};

$r = new ReflectionMethod($f, "__invoke");

unset($f);

echo $r, "\n";

try  {
    echo $r->getPrototype();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
