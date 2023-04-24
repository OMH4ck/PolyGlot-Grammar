<?php

trait Trait1 {
    public const Constant = 42;
}

trait Trait2 {
    use Trait1;
    private const Constant = 42;
}
