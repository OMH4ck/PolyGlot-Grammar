<?php

$stack = zend_test_zend_call_stack_get();

var_dump($stack);

$expectedMaxSize = match(php_uname('s')) {
    'Darwin' => 8*1024*1024,
    'FreeBSD' => match(php_uname('m')) {
        'amd64' => 512*1024*1024 - 4096,
        'i386' => 64*1024*1024 - 4096,
    },
    'Linux' => match (getenv('GITHUB_ACTIONS')) {
        'true' => 16*1024*1024, // https://github.com/actions/runner-images/pull/3328
        default => 8*1024*1024,
    },
    'Windows NT' => 67108864 - 4*4096, // Set by sapi/cli/config.w32
};

printf("Expected max_size: 0x%x\n", $expectedMaxSize);
printf("Actual   max_size: %s\n", $stack['max_size']);

var_dump($stack['max_size'] === sprintf('0x%x', $expectedMaxSize));

