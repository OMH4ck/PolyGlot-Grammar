<?php

function test($foo) {
    switch ($foo . 'Bar') {
        case 'A':
            throw new Exception('A');
        default:
            throw new Exception('Default');
    }
}
try {
    test('Foo');
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

