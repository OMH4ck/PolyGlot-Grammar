<?php

function test($a, $b = 'b', $c = 'c') {
    var_dump(func_num_args());
    var_dump(func_get_args());
    var_dump(func_get_arg(0));
    var_dump(func_get_arg(1));
    var_dump(func_get_arg(2));
}

test(c: 'C', a: 'A');

