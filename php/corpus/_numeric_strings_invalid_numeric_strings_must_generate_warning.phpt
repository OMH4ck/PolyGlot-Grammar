<?php

var_dump("2 Lorem" + "3 ipsum");
try {
    var_dump("dolor" + "sit");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("5 amet," - "7 consectetur");
try {
    var_dump("adipiscing" - "elit,");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("11 sed" * "13 do");
try {
    var_dump("eiusmod" * "tempor");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("17 incididunt" / "19 ut");
try {
    var_dump("labore" / "et");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("23 dolore" ** "29 magna");
try {
    var_dump("aliqua." ** "Ut");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("31 enim" % "37 ad");
try {
    var_dump("minim" % "veniam,");
} catch (\TypeError $e) {
    echo get_class($e) . ': ' . $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("41 minim" << "43 veniam,");
try {
    var_dump("quis" << "nostrud");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("47 exercitation" >> "53 ullamco");
try {
    var_dump("laboris" >> "nisi");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("59 ut" | 61);
var_dump(67 | "71 aliquip");
try {
    var_dump("ex" | 73);
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
try {
    var_dump(79 | "ea");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("83 commodo" & 89);
var_dump(97 & "101 consequat.");
try {
    var_dump("Duis" & 103);
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
try {
    var_dump(107 & "aute");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump("109 irure" ^ 113);
var_dump(127 ^ "131 dolor");
try {
    var_dump("in" ^ 137);
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
try {
    var_dump(139 ^ "reprehenderit");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump(+"149 in");
try {
    var_dump(+"voluptate");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
echo "---", PHP_EOL;
var_dump(-"151 velit");
try {
    var_dump(-"esse");
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
