<?php

$fiber = new Fiber(fn() => null);

$fiber->start();

$fiber->resume();

