<?php
class Foo {
}

Abstract Class Base {
    public function test(Foo $foo, array $bar, $option = NULL, $extra = "lllllllllllllllllllllllllllllllllllllllllllllllllll") {
    }
}

class Sub extends Base {
    public function test() {
    }
}
