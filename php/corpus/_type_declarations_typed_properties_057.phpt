<?php
declare(strict_types=1);

class A {
    public string $foo;
}

$o = new A;
$o->foo = "1" . str_repeat("0", 2);
try {
    $x = ++$o->foo;
} catch (Throwable $e) {
    echo $e->getMessage() . "\n";
}
var_dump($o->foo);
try {
        $x = $o->foo++;
} catch (Throwable $e) {
        echo $e->getMessage() . "\n";
}
var_dump($o->foo);
unset($o);
