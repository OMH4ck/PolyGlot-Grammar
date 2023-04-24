<?php
$gen = (function() {
    $x = new stdClass;
    $fiber = yield;
    print "Before suspend\n";
    Fiber::suspend();
    yield;
})();
$fiber = new Fiber(function() use ($gen, &$fiber) {
    $gen->send($fiber);
    $gen->current();
});
$fiber->start();

$gen = null;
$fiber = null;
gc_collect_cycles();
?>
