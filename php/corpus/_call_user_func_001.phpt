<?php

namespace testing {
    function foobar($str) {
        var_dump($str);
    }

    abstract class bar {
        protected function prot($str) {
            print "Shouldn't be called!\n";
        }
    }
    class foo extends bar {
        private function priv($str) {
            print "Shouldn't be called!\n";
        }
    }

    call_user_func(__NAMESPACE__ .'\foobar', 'foobar');

    $class =  __NAMESPACE__ .'\foo';
    try {
        call_user_func(array(new $class, 'priv'), 'foobar');
    } catch (\TypeError $e) {
        echo $e->getMessage(), "\n";
    }
    try {
        call_user_func(array(new $class, 'prot'), 'foobar');
    } catch (\TypeError $e) {
        echo $e->getMessage(), "\n";
    }
}

