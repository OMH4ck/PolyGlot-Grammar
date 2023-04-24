<?php
enum Status
{
    case Draft;
    case Published;
    case Archived;
}

$reflectionEnum = new \ReflectionEnum('\Status');
var_dump($reflectionEnum->isInstantiable());
var_dump($reflectionEnum->isCloneable());
