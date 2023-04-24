<?php
$it = new class implements Iterator
{
    public function current(): mixed
    {
        return null;
    }

    public function key(): mixed
    {
        return 0;
    }

    public function next(): void
    {
    }

    public function rewind(): void
    {
        $x = new stdClass;
        print "Before suspend\n";
        Fiber::suspend();
    }

    public function valid(): bool
    {
        return true;
    }
};

$gen = (function() use ($it) {
    $x = new stdClass;
    yield from $it;
})();
$fiber = new Fiber(function() use ($gen, &$fiber) {
    $gen->current();
    print "Not executed";
});
$fiber->start();
?>
