<?php

try {
    array_merge([1, 2], a: [3, 4]);
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

try {
    array_diff_key([1, 2], [3, 4], a: [5, 6]);
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

