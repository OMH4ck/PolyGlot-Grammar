<?php
$gen = (function() {
    $x = new stdClass;
    yield from (function () {
        $x = new stdClass;
        print "Before suspend\n";
        Fiber::suspend();
        print "After suspend\n";
        yield;
    })();
    yield from (function () {
        $x = new stdClass;
        print "Before exit\n";
        exit;
        print "Not executed\n";
        yield;
    })();
    yield;
})();
$fiber = new Fiber(function() use ($gen, &$fiber) {
    $gen->current();
    print "Fiber return\n";
});
$fiber->start();
$fiber->resume();
$gen->next();
$gen->current();
?>
