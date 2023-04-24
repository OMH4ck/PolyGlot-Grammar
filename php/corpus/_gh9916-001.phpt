<?php
$gen = (function() {
    $x = new stdClass;
    try {
        print "Before suspend\n";
        Fiber::suspend();
        print "Not executed";
        yield;
    } finally {
        print "Finally\n";
    }
    print "Not executed";
})();
$fiber = new Fiber(function() use ($gen, &$fiber) {
    $gen->current();
    print "Not executed";
});
$fiber->start();
?>
