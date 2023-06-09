<?php

class Base
{
    public    $Foo = 1;
    protected $Bar = 2;
    private   $Baz = 3;

    function __construct()
    {
        echo __METHOD__ . "\n";
        var_dump(get_object_vars($this));
    }
}

class Child extends Base
{
    private   $Baz = 4;

    function __construct()
    {
        parent::__construct();
        echo __METHOD__ . "\n";
        var_dump(get_object_vars($this));
    }
}

var_dump(get_object_vars(new Base));
var_dump(get_object_vars(new Child));

