<?php
interface I1 {}
class A implements I1 {}
class B extends A {}

interface I2 extends I1 {}
class C implements I2 {}

$classNames = array('A', 'B', 'C', 'I1', 'I2');

foreach ($classNames as $className) {
    $rcs[$className] = new ReflectionClass($className);
}

foreach ($rcs as $childName => $child) {
    foreach ($rcs as $parentName => $parent) {
        echo "Does " . $childName . " implement " . $parentName . "?\n";
        echo "   - Using object argument: ";
        try {
            var_dump($child->implementsInterface($parent));
        } catch (Exception|TypeError $e) {
            echo $e->getMessage() . "\n";
        }
        echo "   - Using string argument: ";
        try {
            var_dump($child->implementsInterface($parentName));
        } catch (Exception|TypeError $e) {
            echo $e->getMessage() . "\n";
        }
    }
}



echo "\n\nTest bad arguments:\n";
try {
    $rcs['A']->implementsInterface();
} catch (ArgumentCountError $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rcs['A']->implementsInterface('C', 'C');
} catch (ArgumentCountError $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rcs['A']->implementsInterface(null);
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rcs['A']->implementsInterface('ThisClassDoesNotExist');
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rcs['A']->implementsInterface(2);
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
