<?php
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
class A {
    function method(): X {}
}
class B extends A {
    function method(): Y {}
}
