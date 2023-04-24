<?php

$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});

$fiber->start();

