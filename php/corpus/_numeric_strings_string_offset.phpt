<?php

$str = "The world is fun";

$keys = [
    "7",
    "7.5",
    "  7",
    "  7.5",
    "  7  ",
    "  7.5  ",
    "7  ",
    "7.5  ",
    "7str",
    "7.5str",
    "  7str",
    "  7.5str",
    "  7  str",
    "  7.5  str",
    "7  str",
    "7.5  str",
    "0xC",
    "0b10",
    "07",
];

foreach ($keys as $key) {
    try {
        var_dump($str[$key]);
    } catch (\TypeError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}

echo "Done\n";
