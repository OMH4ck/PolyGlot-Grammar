<?php

function test(
    #[SensitiveParameter] $sensitive1 = null,
    $non_sensitive = null,
    #[SensitiveParameter] $sensitive2 = null,
)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
}

function wrapper(
    $non_sensitive = null,
    #[SensitiveParameter] $sensitive1 = null,
    #[SensitiveParameter] $sensitive2 = null,
)
{
    test($non_sensitive, $sensitive1, $sensitive2);
}

wrapper('foo', 'bar', 'baz');

