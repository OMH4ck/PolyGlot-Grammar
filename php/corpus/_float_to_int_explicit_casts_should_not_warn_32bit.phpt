<?php

$values =[
    3.0,
    3.5,
    10e120,
    10e300,
    fdiv(0, 0),
    (string) 3.0,
    (string) 3.5,
    (string) 10e120,
    (string) 10e300,
    (string) fdiv(0, 0),
];

foreach($values as $value) {
    var_dump((int) $value);
}

