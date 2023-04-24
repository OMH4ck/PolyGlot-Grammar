<?php

function reflectMethodModifiers($class) {
    $classInfo = new reflectionClass($class);
    $methodArray = $classInfo->getMethods();

    foreach ($methodArray as $method) {
        echo "Modifiers for method $method->class::$method->name():\n";
        printf("0x%08x\n", $method->getModifiers());
        echo "\n\n";
    }
}

class TestClass
{
    public function foo() {
        echo "Called foo()\n";
    }

    static function stat() {
        echo "Called stat()\n";
    }

    private function priv() {
        echo "Called priv()\n";
    }

    protected function prot() {}

    public final function fin() {}

    public function __construct() {}

    public function __destruct() {}

    public function __call($a, $b) {}

    public static function __callStatic($a, $b) {}

    public function __clone() {}

    public function __get($a) {}

    public function __set($a, $b) {}

    public function __unset($a) {}

    public function __invoke() {}

    public function __isset($a) {}

    public function __tostring() {}

    public function __sleep() {}

    public function __wakeup() {}

    public static function __set_state($a) {}

    public function __autoload() {}

    public function __serialize() {}

    public function __unserialize($data) {}

    public function __debugInfo() {}
}

class DerivedClass extends TestClass {}

interface TestInterface {
    public function int();
    public function __clone();
}

abstract class AbstractClass {
    public abstract function foo();
}



reflectMethodModifiers("TestClass");
reflectMethodModifiers("DerivedClass");
reflectMethodModifiers("TestInterface");
reflectMethodModifiers("AbstractClass");

$a = new ReflectionMethod('ReflectionMethod::getModifiers');

echo "ReflectionMethod::getModifiers() modifiers:\n";
printf("0x%08x\n", $a->getModifiers());

