<?php

function test(
    #[SensitiveParameter] ...$args
)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
}

test('foo', 'bar', 'baz');

