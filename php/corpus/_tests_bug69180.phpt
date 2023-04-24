<?php

trait T1
{
    public function foo()
    {
    }
}

trait T2
{
    use T1 { foo as bar; }

    public function foo()
    {
    }
}


class C
{
    use T2;
}

$class = new ReflectionClass('C');

foreach ($class->getMethods() as $method) {
    var_dump($method->getName());
}

