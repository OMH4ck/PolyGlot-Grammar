<?php

spl_autoload_register(function ($c) {
    class autoload_class
    {
        public function __construct()
        {
            print "autoload success\n";
        }
    }
});

$a = new ReflectionClass('autoload_class');

if (is_object($a)) {
    echo "OK\n";
}

