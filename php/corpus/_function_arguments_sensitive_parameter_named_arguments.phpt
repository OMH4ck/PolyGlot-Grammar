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

test(non_sensitive: 'non_sensitive', sensitive2: 'sensitive2');

