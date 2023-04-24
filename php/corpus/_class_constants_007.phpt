<?php
class A {
    const X = ' ' . self::Y;
    const Y = ' ';
}
eval('class B extends A{}');
var_dump(B::X);
