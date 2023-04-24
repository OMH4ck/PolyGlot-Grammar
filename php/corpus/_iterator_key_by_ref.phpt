<?php
class Test extends ArrayIterator {
    #[ReturnTypeWillChange]
    function &key() {
        return $foo;
    }
}
foreach (new Test([0]) as $k => $v) {
    var_dump($k);
}
