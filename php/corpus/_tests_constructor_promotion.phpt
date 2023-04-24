<?php

class Test {
    public $z;
    public function __construct(
        public int $x,
        /** @SomeAnnotation() */
        public string $y = "123",
        string $z = "abc",
    ) {}
}

$rc = new ReflectionClass(Test::class);
echo $rc, "\n";

$y = $rc->getProperty('y');
var_dump($y->isPromoted());
var_dump($y->getDocComment());
$z = $rc->getProperty('z');
var_dump($z->isPromoted());

echo "\n";

$rp = new ReflectionParameter([Test::class, '__construct'], 'y');
var_dump($rp->isPromoted());
$rp = new ReflectionParameter([Test::class, '__construct'], 'z');
var_dump($rp->isPromoted());

