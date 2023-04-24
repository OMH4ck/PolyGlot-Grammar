<?php
class C {
    private $p = 1;
}

#[AllowDynamicProperties]
class D extends C{
}

$Obj = new D;
$Obj->p = 'value';
echo new ReflectionObject($Obj);
