<?php

trait Trait1 {
    public const Constant = 123;
}

trait Trait2 {
    use Trait1;
    public const Constant = 456;
}
