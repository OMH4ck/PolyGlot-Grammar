<?php

$tests = [
    'No overflow 001' => '0',
    'No overflow 002' => '1',
    'No overflow 003' => '100',
    'No overflow 004' => strval(PHP_INT_MAX),
    'No overflow 005' => '2K',
    'No overflow 006' => '-1',
    'No overflow 007' => ' -1',
    'No overflow 008' => '-1 ',
    'No overflow 009' => ' -1 ',
    'Subject overflow 001' => base_convert(str_repeat('1', PHP_INT_SIZE*8+1), 2, 10),
    'Subject overflow 002' => '-'.base_convert(str_repeat('1', PHP_INT_SIZE*8+1), 2, 10),
    'Subject overflow 003' => strval(PHP_INT_MIN),
    'Subject overflow 004' => '-2',
    'Subject overflow 005' => '-1K',
    'Subject overflow 006' => '-1 K',
    'Multiplier overflow 001' => strval(PHP_INT_MAX).'K',
];

foreach ($tests as $name => $value) {
    printf("# %s: \"%s\"\n", $name, $value);
    printf("%u\n", zend_test_zend_ini_parse_uquantity($value));
    print "\n";
    print "----------\n";
}

printf("# zend_test_zend_ini_parse_uquantity(\"-1\") === -1\n");
