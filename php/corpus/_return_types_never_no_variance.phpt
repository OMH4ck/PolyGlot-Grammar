<?php

class A
{
    public function bar(): never
    {
        throw new \Exception('parent');
    }
}

class B extends A
{
    public function bar(): string
    {
        return "hello";
    }
}

(new B)->bar();

