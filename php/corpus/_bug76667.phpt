<?php

class T {
    public function __get($k)
    {
        return $undefined->$k;
    }

    public function __set($k, $v)
    {
        return $this->$v /= 0;
    }
}

$x = new T;
try {
    $x->x = 1;
} catch (\DivisionByZeroError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
