<?php
function f() {
    $$y = Fiber::getCurrent();
    Fiber::suspend();
}
$fiber = new Fiber(function() {
    get_defined_vars();
    f();
});
$fiber->start();
gc_collect_cycles();
?>
