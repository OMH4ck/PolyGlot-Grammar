<?php

class AClass
{
    public $prop = AnEnum::Value;
}

enum AnEnum
{
    case Value;
}

var_dump(new AClass);

