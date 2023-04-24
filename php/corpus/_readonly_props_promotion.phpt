<?php

class Point {
    public function __construct(
        public readonly float $x = 0.0,
        public readonly float $y = 0.0,
        public readonly float $z = 0.0,
    ) {}
}

var_dump(new Point);
$point = new Point(1.0, 2.0, 3.0);
try {
    $point->x = 4.0;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
var_dump($point);

