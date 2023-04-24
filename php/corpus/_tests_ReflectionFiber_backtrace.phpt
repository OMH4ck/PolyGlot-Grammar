<?php

function suspend_fiber(): void {
    Fiber::suspend();
}

class Test
{
    public function __invoke(string $arg): void
    {
        suspend_fiber();
    }
}

$fiber = new Fiber(new Test);

$fiber->start('test');

$reflection = new ReflectionFiber($fiber);

var_dump($reflection->getTrace(DEBUG_BACKTRACE_PROVIDE_OBJECT));

