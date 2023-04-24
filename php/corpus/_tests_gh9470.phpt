<?php

class A
{
    public function publicMethod() {}
    protected function protectedMethod() {}
    private function privateMethod() {}
}
class B extends A {}

echo (string) new ReflectionMethod('B', 'publicMethod');
echo (string) new ReflectionMethod('B', 'protectedMethod');
try {
    echo (string) new ReflectionMethod('B', 'privateMethod');
} catch(Throwable $e){
    echo $e->getMessage(), "\n";
}

