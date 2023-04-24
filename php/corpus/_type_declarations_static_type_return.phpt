<?php

class A {
    public function test1(): static {
        return new static;
    }
    public function test2(): static {
        return new self;
    }
    public function test3(): static {
        return new static;
    }
    public function test4(): static|array {
        return new self;
    }
}

class B extends A {
    public function test3(): static {
        return new C;
    }
}

class C extends B {}

$a = new A;
$b = new B;

var_dump($a->test1());
var_dump($b->test1());

echo "\n";
var_dump($a->test2());
try {
    var_dump($b->test2());
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

echo "\n";
var_dump($a->test3());
var_dump($b->test3());

echo "\n";
var_dump($a->test4());
try {
    var_dump($b->test4());
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

echo "\n";
$test = function($x): static {
    return $x;
};

try {
    var_dump($test(new stdClass));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

$test = $test->bindTo($a);
var_dump($test($a));

