<?php
function test() {
    $ary = [[]];
    $ary[0] += $ary;
    foreach ($ary as $v) {
        var_dump($v);
    }
}
test();
