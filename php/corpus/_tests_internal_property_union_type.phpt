<?php
$rp = new ReflectionProperty(_ZendTestClass::class, 'classUnionProp');
$rt = $rp->getType();
echo $rt, "\n";
