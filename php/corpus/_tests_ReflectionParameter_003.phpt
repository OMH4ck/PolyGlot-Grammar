<?php

class ReflectTestClass {
    public static function staticMethod($paramOne, $anotherParam = "bob",
                                        &$thirdParam = "jack", $arrayParam = array('one')) {
        echo "hello from test\n";
        echo "third is $thirdParam\n";
        return ++$theIncrement;
    }

}

$jane = "jane";
ReflectTestClass::staticMethod("bob", "jack");

$refMethod = new ReflectionMethod('ReflectTestClass', 'staticMethod');
$refParameters = $refMethod->getParameters();

echo "parameter names from staticMethod method:\n\n";
foreach($refParameters as $parameter) {
    var_dump($parameter);
    if($parameter->isOptional()) {
      echo "this parameter is optional\n";
    } else {
      echo "this parameter is not optional\n";
    }

    if($parameter->isDefaultValueAvailable()) {
      echo "this parameter has a default value\n";
    } else {
      echo "this parameter has no default value\n";
    }

    /*
    $val = 0;
    try {
        $val = $parameter->getDefaultValue();
        var_dump($val);
    } catch (ReflectionException $e) {
        print $e->getMessage();
        echo "\n";
    }
    */

    echo "\n";
}

