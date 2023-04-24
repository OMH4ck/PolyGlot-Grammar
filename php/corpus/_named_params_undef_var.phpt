<?php

function func1($arg) { var_dump($arg); }
func1(arg: $undef);
func2(arg: $undef);
function func2($arg) { var_dump($arg); }

