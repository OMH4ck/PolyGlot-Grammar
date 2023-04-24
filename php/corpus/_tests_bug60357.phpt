<?php
function foo(
    array $x = array('a', 'b'),
    array $y = ['x' => 'y'],
    array $z = [0 => 0, 2 => -2],
    array $a = [[], [1], [2, 3]],
) {}
echo new ReflectionFunction('foo'), "\n";
