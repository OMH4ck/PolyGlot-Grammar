<?php
$z = unserialize('O:1:"A":0:{}');
try {
    var_dump($z->e.=0);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump(++$z->x);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump($z->y++);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

$y = array(PHP_INT_MAX => 0);
try {
    var_dump($y[] .= 0);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump(++$y[]);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump($y[]++);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
