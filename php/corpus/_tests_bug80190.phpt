<?php

class C
{
    public function a(): self
    {
    }

    public function b(): stdClass|self
    {
    }

    public function c(): static
    {
    }

    public function d(): stdClass|static
    {
    }
}

foreach ((new ReflectionClass(C::class))->getMethods() as $method) {
    print $method->getDeclaringClass()->getName() . '::' . $method->getName() . '()' . PHP_EOL;
    print '    $method->getReturnType() returns ' . get_class($method->getReturnType()) . PHP_EOL;
    print '    $method->getReturnType()->__toString() returns ' . $method->getReturnType() . PHP_EOL;

    if ($method->getReturnType() instanceof ReflectionUnionType) {
        print '    $method->getReturnType()->getTypes() returns an array with ' . count($method->getReturnType()->getTypes()) . ' element(s)' . PHP_EOL;

        print '    type(s) in union: ';
        
        $types = [];

        foreach ($method->getReturnType()->getTypes() as $type) {
            $types[] = get_class($type) . "($type)";
        }
        
        print join(', ', $types) . PHP_EOL;
    }

    print PHP_EOL;
}

