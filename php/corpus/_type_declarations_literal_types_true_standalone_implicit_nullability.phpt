<?php

function test(true $v = null) { return $v; }

var_dump(test(true));
var_dump(test(null));
