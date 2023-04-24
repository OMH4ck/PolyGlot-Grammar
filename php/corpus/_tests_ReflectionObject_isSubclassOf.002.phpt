<?php
class C {}
$ro = new ReflectionObject(new C);

echo "\n\nTest bad arguments:\n";
try {
    $ro->isSubclassOf();
} catch (ArgumentCountError $e) {
    echo $e->getMessage() . "\n";
}
try {
    $ro->isSubclassOf('C', 'C');
} catch (ArgumentCountError $e) {
    echo $e->getMessage() . "\n";
}
try {
    $ro->isSubclassOf(null);
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
try {
    $ro->isSubclassOf('ThisClassDoesNotExist');
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
try {
    $ro->isSubclassOf(2);
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}
