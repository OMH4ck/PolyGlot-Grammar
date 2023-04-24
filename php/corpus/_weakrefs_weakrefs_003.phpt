<?php
$wr = WeakReference::create(new stdClass);

var_dump($wr->disallow);
var_dump(isset($wr->disallow));
unset($wr->disallow);

try {
    $wr->disallow = "writes";
} catch (Error $ex) {
    var_dump($ex->getMessage());
}

try {
    $disallow = &$wr->disallowed;
} catch (Error $ex) {
    var_dump($ex->getMessage());
}
