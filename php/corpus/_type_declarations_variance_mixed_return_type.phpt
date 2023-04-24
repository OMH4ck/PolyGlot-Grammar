<?php

spl_autoload_register(function($class) {
    echo "Loading $class\n";
});

class A {
    public function test(): mixed {}
}
class B extends A {
    public function test(): X {}
}

?>
