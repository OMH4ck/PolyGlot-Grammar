<?php

trait Trait1 {
  public const Constant = 123;
}

trait Trait2 {
  public const Constant = 456;
}

echo "PRE-CLASS-GUARD\n";

class TraitsTest {
    use Trait1;
    use Trait2;
}

echo "POST-CLASS-GUARD\n";
