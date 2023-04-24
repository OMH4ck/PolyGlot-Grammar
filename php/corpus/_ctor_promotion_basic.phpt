<?php

class Point {
    public function __construct(public int $x, public int $y, public int $z) {}
}

$point = new Point(1, 2, 3);

// Check that properties really are typed.
try {
    $point->x = "foo";
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

