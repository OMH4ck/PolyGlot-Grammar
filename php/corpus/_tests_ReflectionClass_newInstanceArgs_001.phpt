<?php

class B {
    public function __construct($a, $b) {
        echo "In constructor of class B with args $a, $b\n";
    }
}

class C {
    protected function __construct() {
        echo "In constructor of class C\n";
    }
}

class D {
    private function __construct() {
        echo "In constructor of class D\n";
    }
}
class E {
}


$rcB = new ReflectionClass('B');
$rcC = new ReflectionClass('C');
$rcD = new ReflectionClass('D');
$rcE = new ReflectionClass('E');

try {
    $rcB->newInstanceArgs();
} catch (Throwable $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}

var_dump($rcB->newInstanceArgs(array('x', 123)));

try {
    $rcC->newInstanceArgs();
    echo "you should not see this\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

try {
    $rcD->newInstanceArgs();
    echo "you should not see this\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

$e1 = $rcE->newInstanceArgs();
var_dump($e1);

try {
    $e2 = $rcE->newInstanceArgs(array('x'));
    echo "you should not see this\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
