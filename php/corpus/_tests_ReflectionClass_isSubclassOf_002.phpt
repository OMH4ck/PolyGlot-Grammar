<?php
class A {}
$rc = new ReflectionClass('A');

echo "\n\nTest bad arguments:\n";
try {
    $rc->isSubclassOf();
} catch (ArgumentCountError $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rc->isSubclassOf('C', 'C');
} catch (ArgumentCountError $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rc->isSubclassOf(null);
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rc->isSubclassOf('ThisClassDoesNotExist');
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
try {
    $rc->isSubclassOf(2);
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
