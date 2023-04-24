<?php

class A {
    private function privateMethod() {}
}

class C extends A {
    private function privateMethod() {}
}

echo (new ReflectionClass('A'))->getMethod('privateMethod');
echo (new ReflectionClass('C'))->getMethod('privateMethod');

