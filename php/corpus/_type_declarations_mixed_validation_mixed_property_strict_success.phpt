<?php
declare(strict_types=1);

class Foo
{
    public mixed $property1;
    public mixed $property2 = null;
    public mixed $property3 = false;
    public mixed $property4 = true;
    public mixed $property5 = 1;
    public mixed $property6 = 3.14;
    public mixed $property7 = "foo";
    public mixed $property8 = [];
    public mixed $property9;

    public function __construct()
    {
        $this->property9 = fopen(__FILE__, "r");
        $this->property9 = new stdClass();
    }
}

$foo = new Foo();

try {
    $foo->property1;
} catch (Error $exception) {
    echo $exception->getMessage() . "\n";
}

