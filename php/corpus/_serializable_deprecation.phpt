<?php

interface I extends Serializable {}
abstract class A implements Serializable {}

class C extends A implements I {
    public function serialize(): string {}
    public function unserialize(string $data) {}
}

class D extends A implements I {
    public function serialize(): string {}
    public function unserialize(string $data) {}
    public function __serialize(): array {}
    public function __unserialize(array $data) {}
}

