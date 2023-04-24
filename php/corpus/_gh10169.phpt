<?php
class A
{
    public string $prop;
}
class B
{
    public function __toString()
    {
        global $a;
        $a = null;
        return str_repeat('a', 1);
    }
}

$a = new A();
try {
    $a->prop = new B();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

$a = new A();
$a->prop = '';
try {
    $a->prop = new B();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

