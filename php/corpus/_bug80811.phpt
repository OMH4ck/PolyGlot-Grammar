<?php

echo 'Executing with all params:' . PHP_EOL;
exec('echo Something', output: $output, result_code: $resultCode);
var_dump($resultCode);

echo 'Executing without output param:' . PHP_EOL;
exec('echo Something', result_code: $resultCode);
var_dump($resultCode);

