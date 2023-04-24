<?php

enum Foo {
    case Bar;

    public function __toString(): string {
        return $this->name;
    }
}

