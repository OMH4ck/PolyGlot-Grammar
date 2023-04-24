<?php
$a = 'aaa';

foreach ($a['2bbb'] as &$value) {
    echo 'loop';
}

unset($value);
echo 'done';
