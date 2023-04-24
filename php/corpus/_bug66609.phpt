<?php
$bar = new Bar;
$foo = new Foo;
class Bar {
    public function __get($x) {
        global $foo;
        return $foo->foo;
    }
}
#[AllowDynamicProperties]
class Foo {
    public function __get($x) {
        global $bar;
        return $bar->bar;
    }
}
$foo->blah += 1; //crash
++$foo->blah;    //crash
$foo->blah++;    //crash
$foo->blah--;    //crash
--$foo->blah;    //crash
echo "okey";
