<?php

class Foo {
    public static $bar = 42;
}

$n = 42;

${42} = 24;
var_dump(${42});
var_dump(${(int) 42});
var_dump(${(int) $n});

try {
    var_dump(Foo::${42});
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Foo::${(int) 42});
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Foo::${(int) $n});
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

