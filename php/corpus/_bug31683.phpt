<?php

class Foo implements ArrayAccess {

  function __get($test) {
    var_dump($test);
    $test = 'bug';
  }

  function __set($test, $val) {
    var_dump($test);
    var_dump($val);
    $test = 'bug';
    $val = 'bug';
  }

  function __call($test, $arg) {
    var_dump($test);
    $test = 'bug';
  }

  function offsetget($test): mixed {
    var_dump($test);
    $test = 'bug';
    return 123;
  }

  function offsetset($test, $val): void {
    var_dump($test);
    var_dump($val);
    $test = 'bug';
    $val  = 'bug';
  }

  function offsetexists($test): bool {
    var_dump($test);
    $test = 'bug';
    return true;
  }

  function offsetunset($test): void {
    var_dump($test);
    $test = 'bug';
  }

}

$foo = new Foo();
$a = "ok";

for ($i=0; $i < 2; $i++) {
  $foo->ok("ok");
  $foo->ok;
  $foo->ok = "ok";
  $x = $foo["ok"];
  $foo["ok"] = "ok";
  isset($foo["ok"]);
  unset($foo["ok"]);
//  $foo[];
  $foo[] = "ok";
//  isset($foo[]);
//  unset($foo[]);
  $foo->$a;
  echo "---\n";
}
