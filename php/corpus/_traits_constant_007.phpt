<?php

trait TestTrait {
  public const Constant = 42;
}

echo "PRE-CLASS-GUARD\n";

class ComposingClass {
    use TestTrait;
    public final const Constant = 42;
}

echo "POST-CLASS-GUARD\n";
