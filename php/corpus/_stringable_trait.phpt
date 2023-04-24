<?php

trait T {
    public function __toString(): string {
        return "ok";
    }
}
trait T2 {
    use T;
}

class C {
    use T;
}
class C2 {
    use T2;
}

var_dump(new C instanceof Stringable);
var_dump(new C2 instanceof Stringable);

// The traits themselves should not implement Stringable -- traits cannot implement interfaces.
$rc = new ReflectionClass(T::class);
var_dump($rc->getInterfaceNames());
$rc = new ReflectionClass(T2::class);
var_dump($rc->getInterfaceNames());

