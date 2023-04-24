<?php
class Test {
    function register() {
        register_shutdown_function('Test::method');
    }
    function method() {
        var_dump($this);
    }
}
(new Test)->register();
