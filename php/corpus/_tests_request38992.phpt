<?php
class MyClass
{
    public static function doSomething()
    {
        echo "Did it!\n";
    }
}

$r = new ReflectionMethod('MyClass', 'doSomething');
try {
    $r->invoke('WTF?');
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    $r->invokeArgs('WTF?', array());
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
