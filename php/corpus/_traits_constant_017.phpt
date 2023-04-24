<?php

trait TestTrait {
  public const Constant = 42;
}

var_dump(\defined('TestTrait::Constant'));
