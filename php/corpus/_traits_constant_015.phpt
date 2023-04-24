<?php

trait TestTrait1 {
    public final const Constant = 123;
}

class BaseClass1 {
    public final const Constant = 123;
}

class DerivedClass1 extends BaseClass1 {
    use TestTrait1;
}

trait TestTrait2 {
    public final const Constant = 123;
}

class BaseClass2 {
    public final const Constant = 456;
}

class DerivedClass2 extends BaseClass2 {
    use TestTrait2;
}

