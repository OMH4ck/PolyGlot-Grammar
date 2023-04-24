<?php

trait T1 {
    public readonly int $prop;
}
trait T2 {
    public readonly int $prop;
}
class C {
    use T1, T2;
}

?>
