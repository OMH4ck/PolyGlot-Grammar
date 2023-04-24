<?php

$generator = (function () {
    yield from [1, 2, 3];
})();

$generator->next();
$generator->next();
try {
    $generator->rewind();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
echo $generator->current(), "\n";

$generator2 = (function () {
    yield from [];
    yield 4;
})();
$generator2->current();
$generator2->rewind();
echo $generator2->current(), "\n";

