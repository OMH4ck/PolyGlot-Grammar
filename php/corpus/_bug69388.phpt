<?php

function handle_error($code, $message, $file, $line) {
    if (!function_exists("bla")) {
        eval('function bla($s) {echo "$s\n";}');
    }
    bla($message);
}

set_error_handler('handle_error');
eval('namespace {use Exception;}');

