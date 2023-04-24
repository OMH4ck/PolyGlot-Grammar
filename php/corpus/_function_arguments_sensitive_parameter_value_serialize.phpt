<?php

$v = new SensitiveParameterValue('secret');

var_dump(serialize($v));

