<?php

    class MyClass {
        static function test() {
          return __TRAIT__;
        }
    }

    function someFun() {
      return __TRAIT__;
    }


    $t = __TRAIT__;
    var_dump($t);
    $t = MyClass::test();
    var_dump($t);
    $t = someFun();
    var_dump($t);
