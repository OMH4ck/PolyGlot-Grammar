<?php

class TestClass
{
    public function foo() {
    }
}


try {
    echo "Too few arguments:\n";
    $methodInfo = new ReflectionMethod();
} catch (ArgumentCountError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}
try {
    echo "\nToo many arguments:\n";
    $methodInfo = new ReflectionMethod("TestClass", "foo", true);
} catch (ArgumentCountError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}


try {
    //invalid class
    $methodInfo = new ReflectionMethod("InvalidClassName", "foo");
} catch (ReflectionException $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}


try {
    //invalid 1st param
    $methodInfo = new ReflectionMethod([], "foo");
} catch (TypeError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}

try{
    //invalid 2nd param
    $methodInfo = new ReflectionMethod("TestClass", []);
} catch (TypeError $re) {
    echo "Ok - ".$re->getMessage().PHP_EOL;
}

