<?php
$wr = WeakReference::create(new stdClass);

try {
    serialize($wr);
} catch (Exception $ex) {
    var_dump($ex->getMessage());
}

$wrs = 'O:13:"WeakReference":0:{}';

try {
	var_dump(unserialize($wrs));
} catch (Exception $ex) {
    var_dump($ex->getMessage());
}
