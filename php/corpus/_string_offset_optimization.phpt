<?php
function test() {
    $a = "";
    $c = array(&$a[0]);
}
test();
