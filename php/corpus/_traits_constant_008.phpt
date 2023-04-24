<?php

trait Trait1 {
  public const Constant = 42;
}

trait Trait2 {
  private const Constant = 42;
}

echo "PRE-CLASS-GUARD\n";

class TraitsTest {
    use Trait1;
    use Trait2;
}

echo "POST-CLASS-GUARD\n";
