<?php
$a = '';
var_dump(isset($a->b));
$a = 'a';
var_dump(isset($a->b));
$a = '0';
var_dump(isset($a->b));
$a = '';
var_dump(isset($a['b']));
$a = 'a';
var_dump(isset($a['b']));
$a = '0';
var_dump(isset($a['b']));

$simpleString = "Bogus String Text";
echo isset($simpleString->wrong)?"bug\n":"ok\n";
try {
    echo isset($simpleString["wrong"])?"bug\n":"ok\n";
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo isset($simpleString[-20])?"bug\n":"ok\n";
echo isset($simpleString[0])?"ok\n":"bug\n";
echo isset($simpleString["0"])?"ok\n":"bug\n";
echo isset($simpleString["16"])?"ok\n":"bug\n";
echo isset($simpleString["17"])?"bug\n":"ok\n";
echo $simpleString->wrong === null?"ok\n":"bug\n";
try {
    echo $simpleString["wrong"] === "B"?"ok\n":"bug\n";
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo $simpleString["0"] === "B"?"ok\n":"bug\n";
try {
    /* This must not affect the string value */
    $simpleString["wrong"] = "f";
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo $simpleString["0"] === "B"?"ok\n":"bug\n";
