<?php
function test($a) {
    static $a = UNDEFINED;
}
test(new stdClass);
