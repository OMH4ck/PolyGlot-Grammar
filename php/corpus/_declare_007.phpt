<?php
register_tick_function(function (stdClass $object, array $array) {
    echo "tick: ", get_class($object), " ", count($array), "\n";
}, new \stdClass(), [1, 2, 3]);
function foo() { }

declare(ticks=1) {

$statement;
foo();

}
