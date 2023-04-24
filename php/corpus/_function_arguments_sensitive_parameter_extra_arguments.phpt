<?php

function test(
    $non_sensitive,
    #[SensitiveParameter] $sensitive,
)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
}

test('foo', 'bar', 'baz');

