<?php

trait TestTrait {
    public final const Constant = 123;
}

class ComposingClass {
    use TestTrait;
    public final const Constant = 123;
}

class DerivedClass extends ComposingClass {
    public final const Constant = 456;
}

