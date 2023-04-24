<?php
$test = new _ZendTestChildClass;

try {
    $test->returnsThrowable();
} catch (\Error) {
    echo "OK";
}
