<?php

declare(strict_types=1);

var_dump(ZendTestStringEnum::from("Test2"));

try {
    var_dump(ZendTestStringEnum::from(42));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(ZendTestStringEnum::tryFrom(43));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

