<?php

class Foo {
    public const BAR = 'bar';
}

function test($code) {
    try {
        var_dump(eval($code));
    } catch (Throwable $e) {
        echo $e->getMessage(), "\n";
    }
}

$const_names = [
    ['', '"BAR"'],
    ['$bar = "BAR";', '$bar'],
    ['$ba = "BA"; $r = "R";', '$ba . $r'],
    ['', 'strtoupper("bar")'],
    ['', '$barr'],
    ['$bar = "BAR"; $barRef = &$bar;', '$barRef'],
    ['', 'strtolower("CLASS")'],
    ['', '42'],
    ['$bar = 42;', '$bar'],
    ['', '[]'],
    ['$bar = [];', '$bar'],
];

foreach ($const_names as [$prolog, $const_name]) {
    test("$prolog return Foo::{{$const_name}};");
    test("\$foo = 'Foo'; $prolog return \$foo::{{$const_name}};");
}

