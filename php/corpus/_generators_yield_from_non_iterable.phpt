<?php

function gen() {
    yield from new stdClass;
}

try {
    gen()->current();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

