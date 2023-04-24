<?php

class Test {
    public function __construct(
        public readonly int $prop = 1,
    ) {}
}

var_dump($s = serialize(new Test));
var_dump(unserialize($s));

// Readonly properties receive no special handling.
// What happens during unserialization stays in unserialization.
var_dump(unserialize("O:4:\"Test\":1:{s:4:\"prop\";i:2;}"));
var_dump(unserialize("O:4:\"Test\":2:{s:4:\"prop\";i:2;s:4:\"prop\";i:3;}"));

