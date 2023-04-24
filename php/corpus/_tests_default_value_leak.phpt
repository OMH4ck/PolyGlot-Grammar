<?php

class Test {
    public function method($param = [123]) {}
}

$rp = new ReflectionParameter(['Test', 'method'], 'param');
var_dump($rp->isDefaultValueAvailable());
var_dump($rp->isDefaultValueConstant());
var_dump($rp->getDefaultValue());

