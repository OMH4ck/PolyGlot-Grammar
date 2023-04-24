<?php

$test = function(&$arg) {};
call_user_func([$test, '__invoke'], null);

