<?php
function &stringRef() {
    static $a = "1";
    $b = $a;
    $a = &$b;
    return $a;
}

class Foo {
    public static int $i = 0;
    public static string $s = "1";
}

Foo::$s .= "1";
var_dump(Foo::$s);

Foo::$s += 2;
var_dump(Foo::$s);

Foo::$s = &stringRef();
Foo::$s .= 2;
var_dump(Foo::$s);

Foo::$i += stringRef();
var_dump(Foo::$i);

try {
    Foo::$i += PHP_INT_MAX;
} catch (TypeError $e) { print $e->getMessage()."\n"; }
var_dump(Foo::$i);

try {
    Foo::$i .= PHP_INT_MAX;
} catch (TypeError $e) { print $e->getMessage()."\n"; }
var_dump(Foo::$i);

