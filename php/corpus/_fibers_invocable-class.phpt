<?php

class Test {
    public function __invoke() {
        $GLOBALS['test'] = null;
        var_dump($this);
        try {
            Fiber::suspend();
        } finally {
            var_dump($this);
        }
    }
}

$test = new Test;
$fiber = new Fiber($test);
$fiber->start();

