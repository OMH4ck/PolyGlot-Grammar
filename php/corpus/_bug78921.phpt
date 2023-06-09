<?php

spl_autoload_register(function($className) {
    if ($className == 'PrivateStatic') {
        class PrivateStatic
        {
            const SOME_CONST = 13;
            private static $privateStaticVarArray = ['a', 'b', 'c'];
            private static $otherStatic;
            public static function init()
            {
                self::$otherStatic = self::$privateStaticVarArray;
            }
        }
        PrivateStatic::init();
    }
});

class OtherClass
{
    const MY_CONST = PrivateStatic::SOME_CONST;
    public static $prop = 'my property';
}

$reflectionClass = new ReflectionClass('OtherClass');
$reflectionProperty = $reflectionClass->getProperty('prop');
$value = $reflectionProperty->getValue();
echo "Value is $value\n";

