<?php

function test(false $v = null) { return $v; }

var_dump(test(false));
var_dump(test(null));
