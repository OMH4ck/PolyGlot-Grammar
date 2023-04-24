<?php

class Test {}

try {
    new stdClass(x: "nope");
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    new Test(x: "nope");
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

