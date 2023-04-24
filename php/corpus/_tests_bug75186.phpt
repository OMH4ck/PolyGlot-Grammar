<?php

$rc = new ReflectionClass(Closure::class);
foreach ($rc->getMethods() as $method) {
    if ($method->name == '__invoke') {
        var_dump($method);
        $method->invoke(
            function($what) { echo "Hello $what!\n"; },
            "World"
        );
    }
}

