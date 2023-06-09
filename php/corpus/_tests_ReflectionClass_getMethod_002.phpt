<?php
class C {
    function f() {}
}

$rc = new ReflectionClass("C");
echo "Check invalid params:\n";
try {
    var_dump($rc->getMethod());
} catch (TypeError $e) {
    echo $e->getMessage() . "\n";
}
try {
    var_dump($rc->getMethod("f", "f"));
} catch (TypeError $e) {
    echo $e->getMessage() . "\n";
}
try {
    var_dump($rc->getMethod(null));
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
try {
    var_dump($rc->getMethod(1));
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
try {
    var_dump($rc->getMethod(1.5));
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
try {
    var_dump($rc->getMethod(true));
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
try {
    var_dump($rc->getMethod(array(1,2,3)));
} catch (TypeError $e) {
    echo $e->getMessage() . "\n";
}
try {
    var_dump($rc->getMethod(new C));
} catch (TypeError $e) {
    echo $e->getMessage() . "\n";
}


