<?php
X::test();

/** Class X is related to neither ParentClass nor ChildClass. */
class X {
  public static function test() {
    $myChild = new ChildClass;
    $myChild->secret(); // bug - invokes X::secret() instead of ChildClass::secret()
  }
  private function secret() {
    echo "Called private " . __METHOD__ . "() on an instance of: " . get_class($this) . "\n";
  }
}

class ParentClass {
  private function secret() { }
}

class ChildClass extends ParentClass {
  public function secret() {
    echo "Called public " . __METHOD__ . "() on an instance of: " . get_class($this) . "\n";
  }
}
