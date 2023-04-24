<?php

class x {
    public function __construct(){
        set_exception_handler([$this, 'dummyExceptionHandler']);
        set_exception_handler([$this, 'dummyExceptionHandler']);
        set_error_handler([$this, 'dummyErrorHandler']);
        set_error_handler([$this, 'dummyErrorHandler']);
    }

    public function __call($m, $p) {}
}

new x;

?>
