<?php
class Hello {
    public function sayHelloTo($name) {
        return 'Hello ' . $name;
    }
}

class HelloWorld extends Hello {
    public function sayHelloTo($name) {
        return 'Hello world: ' . $name;
    }
}

$reflectionMethod = new ReflectionMethod('HelloWorld', 'sayHelloTo');
var_dump($reflectionMethod->getPrototype());

