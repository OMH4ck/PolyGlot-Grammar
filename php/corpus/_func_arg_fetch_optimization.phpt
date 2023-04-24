<?php
function test($x) {
    test($x[][$y]);
}
try {
    test([]);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
