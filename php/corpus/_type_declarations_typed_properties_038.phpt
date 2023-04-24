<?php

$foo = new class {
    public int $bar = PHP_INT_MAX;
};

try {
    $foo->bar++;
} catch(TypeError $t) {
    var_dump($t->getMessage());
}

var_dump($foo);

try {
    $foo->bar += 1;
} catch(TypeError $t) {
    var_dump($t->getMessage());
}

var_dump($foo);

try {
    ++$foo->bar;
} catch(TypeError $t) {
    var_dump($t->getMessage());
}

var_dump($foo);

try {
    $foo->bar = $foo->bar + 1;
} catch(TypeError $t) {
    var_dump($t->getMessage());
}

var_dump($foo);
