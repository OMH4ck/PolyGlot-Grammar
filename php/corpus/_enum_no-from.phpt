<?php

enum Foo: int {
    case Bar = 0;

    public static function from(string|int $value): self {
        return $this;
    }
}

