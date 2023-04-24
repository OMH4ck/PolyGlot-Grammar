<?php

class Foo {
    public $dummy1;
    public $dummy2;
}

class ErrorHandler {
    private $private = 'THIS IS PRIVATE'."\n";

    function __construct() {
        set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
    }

    private function handleError($errno, $errstr, $errfile, $errline, $errmodule = null) {
        echo __METHOD__. " dealing with error $errstr\n";

        // This attribute is no longer accessible in this object.  Same for other
        // objects and their private attributes once we reach in this state.
        echo $this->private;
    }
}

$errorHandler = new ErrorHandler();

$f = new Foo;
unset($f->dummy2);

foreach ((new ReflectionObject($f))->getProperties() as $p) {
    echo $p->getName() .' = '. $p->getValue($f) ."\n";
}

