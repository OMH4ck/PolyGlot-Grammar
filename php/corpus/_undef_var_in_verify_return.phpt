<?php

set_error_handler(function(int $severity, string $message, string $filename, int $lineNumber): void {
    throw new ErrorException($message, 0, $severity, $filename, $lineNumber);
});

function test(): string {
    return $test;
}

test();

