<?php

$fiber = new Fiber(fn() => null);

$fiber->throw(new Exception('test'));

