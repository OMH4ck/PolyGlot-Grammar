<?php
register_shutdown_function(function() {
    echo "Before calling g()\n";
    g(1);
    echo "After calling g()\n";
});

register_shutdown_function(function() {
    echo "Before calling f()\n";
    f(1);
    echo "After calling f()\n";
});

eval('function g($x): int { return $x; }');
eval('function f($x): void { return $x; }');
