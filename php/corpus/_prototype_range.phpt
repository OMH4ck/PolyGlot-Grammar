<?php

class Test
{
    public function getInt(): int { return 0; }

    public function getInt2() {
        return $this->getInt();
    }
}

class Test2 extends Test {
    public function getInt(): int { return 1; }
}

$test2 = new Test2;
var_dump($test2->getInt2());

