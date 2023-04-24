<?php
$gen = (function() {
    $x = new stdClass;
    print "Before yield\n";
    $from = (function () {
        $x = new stdClass;
        print "Before yield 2\n";
        yield;
        print "Before suspend\n";
        Fiber::suspend();
        print "Not executed\n";
        yield;
    })();
    try {
        yield from $from;
    } finally {
        $from->next();
    }
})();

$fiber = new Fiber(function () use ($gen, &$fiber) {
    print "Before current\n";
    $gen->current();
    print "Before next\n";
    $gen->next();
    print "Not executed\n";
});

$fiber->start();
?>
