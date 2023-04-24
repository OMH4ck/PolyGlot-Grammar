<?php
class GlobalData
{
    public static Bar $bar;
}

class Value
{
    public function __destruct()
    {
        new Bar();
    }
}

class Bar
{
    public function __construct()
    {
        GlobalData::$bar = $this;
    }
}

class Foo
{
    public Foo $selfRef;
    public Value $val;

    public function __construct(Value $val)
    {
        $this->val = $val;
        $this->selfRef = $this;
    }
}

for ($j = 0; $j < 10; $j++) {
    for ($i = 0; $i < 3000; $i++) {
        new Foo(new Value());
    }
}

var_dump(gc_status());
