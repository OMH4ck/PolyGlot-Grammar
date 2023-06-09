<?php

define("CONST_TEST_1", "const1");

function ReflectionParameterTest($test, $test2 = CONST_TEST_1) {
    echo $test;
}
$reflect = new ReflectionFunction('ReflectionParameterTest');
foreach($reflect->getParameters() as $param) {
    try {
        echo $param->getDefaultValueConstantName() . "\n";
    } catch(ReflectionException $e) {
        echo $e->getMessage() . "\n";
    }
}
