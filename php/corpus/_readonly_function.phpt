<?php

function readonly() {
    echo "Hi!\n";
}

class A {
    const readonly = 'Const hi!';

    static function readonly() {
        echo "Static hi!\n";
    }
}

class B {
    public $readonly = 'Prop hi!';

    function readonly() {
        echo "Instance hi!\n";
    }
}

$b = new B();

readonly();
echo A::readonly, "\n";
A::readonly();
$b->readonly();
echo $b->readonly, "\n";

