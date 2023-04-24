<?php
$x = 42;
try {
    $$x /= 0;
} catch (DivisionByZeroError $e) {
    echo $e->getMessage(), "\n";
}
