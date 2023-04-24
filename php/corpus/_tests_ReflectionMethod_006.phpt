<?php

try {
    new ReflectionMethod();
} catch (ArgumentCountError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}
try {
    new ReflectionMethod('a', 'b', 'c');
} catch (ArgumentCountError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}

