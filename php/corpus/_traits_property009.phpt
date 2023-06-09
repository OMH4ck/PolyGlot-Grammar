<?php

class BaseWithPropA {
  public $hello = 0;
}

// This is how publics are handled in normal inheritance
class SubclassClassicInheritance extends BaseWithPropA {
  public $hello = 0;
}

// And here, we need to make sure, that the traits behave the same

trait AHelloProperty {
  public $hello = 0;
}

class BaseWithTPropB {
    use AHelloProperty;
}

class SubclassA extends BaseWithPropA {
    use AHelloProperty;
}

class SubclassB extends BaseWithTPropB {
    use AHelloProperty;
}

$classic = new SubclassClassicInheritance;
var_dump($classic);

$a = new SubclassA;
var_dump($a);

$b = new SubclassB;
var_dump($b);

