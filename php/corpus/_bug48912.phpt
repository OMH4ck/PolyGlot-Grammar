<?php
namespace A;

function test()
{
    extract(func_get_arg(0));
}

test(array('x' => 1));
echo "ok\n";
