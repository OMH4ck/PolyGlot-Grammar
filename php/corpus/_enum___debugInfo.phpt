<?php

enum Foo {
    case Bar;

    public function __debugInfo(): array {
        return $this->cases();
    }
}

