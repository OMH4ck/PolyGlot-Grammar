<?php
$gen = (function() {
    $x = new stdClass;
    try {
        print "Before suspend\n";
        Fiber::suspend();
        print "Not executed\n";
    } finally {
        print "Finally\n";
        yield from ['foo' => new stdClass];
        print "Not executed\n";
    }
})();
$fiber = new Fiber(function() use ($gen, &$fiber) {
    $gen->current();
    print "Not executed\n";
});
$fiber->start();
?>
