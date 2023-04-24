<?php

require __DIR__ . '/bug81192_trait.inc';

class A {
    public function foo(): int {
        return 2;
    }
}

class B extends A {
    use T;
}

