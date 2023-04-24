<?php

class C {
    public static $p;
}

try {
    new ReflectionProperty();
} catch (TypeError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}
try {
    new ReflectionProperty('C::p');
} catch (TypeError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}

try {
    new ReflectionProperty('C', 'p', 'x');
} catch (TypeError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}

