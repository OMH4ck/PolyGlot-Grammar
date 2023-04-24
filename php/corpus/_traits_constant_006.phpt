<?php

trait TestTrait {
  public const Constant = 123;
}

echo "PRE-CLASS-GUARD\n";

class ComposingClass {
    use TestTrait;
    public const Constant = 456;
}

echo "POST-CLASS-GUARD\n";
