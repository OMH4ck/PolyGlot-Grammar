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
    var_dump($rcB->newInstance());
} catch (Throwable $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
try {
    var_dump($rcB->newInstance('x', 123));
} catch (Throwable $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}

try {
    $rcC->newInstance();
    echo "you should not see this\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

try {
    $rcD->newInstance();
    echo "you should not see this\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

$e1 = $rcE->newInstance();
var_dump($e1);

try {
    $e2 = $rcE->newInstance('x');
    echo "you should not see this\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
