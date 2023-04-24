<?php
class C {
    public function pubf1() {}
    public function pubf2() {}
    private function privf1() {}
    private function privf2() {}
    static public function pubsf1() {}
    static public function pubsf2() {}
    static private function privsf1() {}
    static private function privsf2() {}
}

$rc = new ReflectionClass("C");
$StaticFlag = ReflectionMethod::IS_STATIC;
$pubFlag = ReflectionMethod::IS_PUBLIC;
$privFlag = ReflectionMethod::IS_PRIVATE;

echo "No methods:";
var_dump($rc->getMethods(0));

echo "Public methods:";
var_dump($rc->getMethods($pubFlag));

echo "Private methods:";
var_dump($rc->getMethods($privFlag));

echo "Public or static methods:";
var_dump($rc->getMethods($StaticFlag | $pubFlag));

echo "Private or static methods:";
var_dump($rc->getMethods($StaticFlag | $privFlag));


