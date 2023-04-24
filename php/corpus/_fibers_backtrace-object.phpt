<?php

class Test
{
    public function __invoke(string $arg): void
    {
        Fiber::suspend();
        throw new Exception($arg);
    }
}

$fiber = new Fiber(new Test);

$fiber->start('test');

$fiber->resume();

