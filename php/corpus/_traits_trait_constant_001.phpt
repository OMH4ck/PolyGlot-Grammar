<?php

trait TestTrait {
    public static function test() {
        return __TRAIT__;
    }
}

class Direct {
    use TestTrait;
}

class IndirectInheritance extends Direct {

}

trait TestTraitIndirect {
  use TestTrait;
}

class Indirect {
  use TestTraitIndirect;
}

echo Direct::test()."\n";
echo IndirectInheritance::test()."\n";
echo Indirect::test()."\n";

