<?php

interface A{}

// No longer considered legal in PHP 8.
class B implements\A {}

echo "Done", PHP_EOL;

