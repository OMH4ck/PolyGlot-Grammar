<?php
function test() {
    $a[X] ??= Y;
    var_dump($a);
}
function test2(string $b, int $c) {
    $a[~$b] ??= $c;
}
define('X', 1);
define('Y', 2);
test();
test2("", 0);
