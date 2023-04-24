<?php
class A {
    public function __get(string|array $name): mixed {} // valid
}

class B extends A {
    public function __get(string|array|object $name): int {} // also valid
}

class C extends B {
    public function __get(string|array $name): int {} // this is invalid
}
