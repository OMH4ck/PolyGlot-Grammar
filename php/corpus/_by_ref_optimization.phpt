<?php

call_user_func('ref', function_exists('strlen'));
ref(function_exists('strlen'));

function ref(&$x) {
    var_dump($x);
}

