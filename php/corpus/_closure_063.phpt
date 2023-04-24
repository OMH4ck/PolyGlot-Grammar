<?php
function foo(){
    static $y;
}
Closure::fromCallable('foo')->bindTo(new stdClass);
?>
