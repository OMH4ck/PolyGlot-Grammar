<?php
spl_autoload_register('load_file');
try {
    $x = new ReflectionMethod('A', 'b');
} catch (\Throwable $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}

function load_file() {
    require __DIR__ . '/bug74454.inc';
}
