<?php
spl_autoload_register(function() {
    class Y {}
    throw new Exception;
});
class A {
    function method(): object {}
}
class B extends A {
    function method(): Y {}
}
