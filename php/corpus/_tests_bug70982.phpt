<?php
class Foo {
    static $abc;
    function __construct()
    {
        var_dump(self::$abc);
    }
}

class Bar extends Foo {

}

$rf = new ReflectionClass('Bar');
$rf->setStaticPropertyValue('abc', 'hi');
$foo = $rf->newInstance();
