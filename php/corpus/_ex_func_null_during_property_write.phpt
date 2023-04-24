<?php
class a {
    public static $i = 0;
    function __destruct() {
        if (self::$i++ != 0) throw new Exception;
        $b = new a;
        echo $b;
    }
}
new a;
