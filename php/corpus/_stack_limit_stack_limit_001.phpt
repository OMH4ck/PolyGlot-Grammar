<?php

var_dump(zend_test_zend_call_stack_get());

class Test1 {
    public function __destruct() {
        new Test1;
    }
}

class Test2 {
    public function __clone() {
        clone $this;
    }
}

class Test3 {
    public function __sleep()
    {
        serialize($this);
    }
}

function replace() {
    return preg_replace_callback('#.#', function () {
        return replace();
    }, 'x');
}

try {
    new Test1;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    clone new Test2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    serialize(new Test3);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    replace();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

