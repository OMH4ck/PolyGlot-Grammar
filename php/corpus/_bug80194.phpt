<?php

function test($x) {
    switch ($x->y) {
        default:
            throw new Exception;
        case 'foobar':
            return new stdClass();
            break;
    }
}

$x = (object)['y' => 'foobar'];
var_dump(test($x));

