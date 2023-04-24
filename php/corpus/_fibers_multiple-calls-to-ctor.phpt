<?php

$fiber = new Fiber(function () {
    return 123;
});

$fiber->__construct(function () {
    return 321;
});

