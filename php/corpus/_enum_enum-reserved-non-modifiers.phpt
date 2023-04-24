<?php

namespace enum {
    class Foo {
        public static function bar() {
            return 'enum\Foo::bar()';
        }
    }
}

namespace {
    class Foo {
        const enum = 'enum const';

        public static function enum() {
            return 'enum static method';
        }
    }

    echo \enum\Foo::bar() . "\n";
    echo Foo::enum . "\n";
    echo Foo::enum() . "\n";
}

