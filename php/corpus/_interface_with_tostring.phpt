<?php

interface MyStringable {
    public function __toString(): string;
}

$rc = new ReflectionClass(MyStringable::class);
var_dump($rc->getInterfaceNames());

