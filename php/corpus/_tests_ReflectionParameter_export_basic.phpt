<?php
function ReflectionParameterTest($test, $test2 = null) {
    echo $test;
}
$reflect = new ReflectionFunction('ReflectionParameterTest');
foreach($reflect->getParameters() as $key => $value) {
    echo new ReflectionParameter('ReflectionParameterTest', $key), "\n";
}
