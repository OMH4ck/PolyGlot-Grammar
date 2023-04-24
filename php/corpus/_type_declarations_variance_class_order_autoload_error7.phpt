<?php

spl_autoload_register(function ($class) {
    if ($class == 'A') {
        class A {
            function m(): B {}
        }
    } elseif ($class == 'B') {
        class B extends A {
            function m(): X {}
        }
    } else {
        class C extends B {}
    }
});

new B;

