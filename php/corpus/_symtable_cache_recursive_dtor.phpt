<?php
class A {
    // Must be larger than the symtable cache.
    static $max = 40;
    function __destruct() {
        if (self::$max-- < 0) return;
        $x = 'y';
        $$x = new a;
    }
}
new A;

?>
