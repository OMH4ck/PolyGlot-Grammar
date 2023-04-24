<?php
class A {
    static $max=0;
    function __destruct() {
        if (self::$max--<0)
            X;  
        $a = new A;
        Y;      
    }
}
new A;
