<?php

$fiber = new Fiber(fn() => Fiber::suspend(1));

$fiber->getReturn();

