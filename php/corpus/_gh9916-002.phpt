<?php
$gen = (function() {
    $x = new stdClass;
    print "Before suspend\n";
    Fiber::suspend();
    print "Not executed\n";
    yield;
})();
$fiber = new Fiber(function() use ($gen, &$fiber) {
    $gen->current();
    print "Not executed";
});
$fiber->start();
?>
