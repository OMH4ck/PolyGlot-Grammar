<?php

function get_value($i) {
    return match ($i) {
        1 => 1,
        2 => 2,
    };
}

echo get_value(1) . "\n";
echo get_value(2) . "\n";
echo get_value(3) . "\n";

