<?php
$classlist = [
    'space1\C' => 'class y{const y="$y";}',
    'D' => 'class D{const HW=space1\C::y;}'
];
spl_autoload_register(function($class) use ($classlist) {
    eval($classlist[$class]);
});
var_dump(D::HW);
