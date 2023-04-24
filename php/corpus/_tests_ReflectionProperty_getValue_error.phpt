<?php

class TestClass {
    public $pub;
    public $pub2 = 5;
    static public $stat = "static property";
    protected $prot = 4;
    private $priv = "keepOut";
}

class AnotherClass {
}

$instance = new TestClass();
$invalidInstance = new AnotherClass();
$propInfo = new ReflectionProperty('TestClass', 'pub2');

echo "\nInstance without property:\n";
$propInfo = new ReflectionProperty('TestClass', 'stat');

echo "\nStatic property / too many args:\n";
try {
    var_dump($propInfo->getValue($instance, true));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

echo "\nProtected property:\n";
$propInfo = new ReflectionProperty('TestClass', 'prot');
var_dump($propInfo->getValue($instance));

echo "\n\nInvalid instance:\n";
$propInfo = new ReflectionProperty('TestClass', 'pub2');
try {
    var_dump($propInfo->getValue($invalidInstance));
} catch (ReflectionException $e) {
    echo $e->getMessage();
}

echo "\n\nMissing instance:\n";
try {
    var_dump($propInfo->getValue());
} catch (TypeError $e) {
    echo $e->getMessage();
}

