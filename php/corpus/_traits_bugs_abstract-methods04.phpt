<?php
error_reporting(E_ALL);

trait THello {
  public abstract function hello();
}

trait THelloImpl {
  public function hello() {
    echo 'Hello';
  }
}

class TraitsTest1 {
    use THello;
    use THelloImpl;
}

$test = new TraitsTest1();
$test->hello();

class TraitsTest2 {
    use THelloImpl;
    use THello;
}

$test = new TraitsTest2();
$test->hello();

