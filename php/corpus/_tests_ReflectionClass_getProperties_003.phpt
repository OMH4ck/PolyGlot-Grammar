<?php
class C {
    public  $pub1;
    public  $pub2;
    private  $priv1;
    private  $priv2;
    static public  $pubs;
    static public  $pubs2;
    static private  $privs1;
    static private  $privs2;
}

$rc = new ReflectionClass("C");
$StaticFlag = ReflectionProperty::IS_STATIC;
$pubFlag =  ReflectionProperty::IS_PUBLIC;
$privFlag = ReflectionProperty::IS_PRIVATE;

echo "No properties:";
var_dump($rc->getProperties(0));

echo "Public properties:";
var_dump($rc->getProperties($pubFlag));

echo "Private properties:";
var_dump($rc->getProperties($privFlag));

echo "Public or static properties:";
var_dump($rc->getProperties($StaticFlag | $pubFlag));

echo "Private or static properties:";
var_dump($rc->getProperties($StaticFlag | $privFlag));
