<?php

enum Foo {
    case Bar;

    public function __serialize(): array {
        return $this->cases();
    }
}

