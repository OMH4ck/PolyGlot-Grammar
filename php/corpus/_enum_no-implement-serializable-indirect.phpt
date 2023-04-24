<?php

interface MySerializable extends Serializable {}

enum Foo implements MySerializable {
    case Bar;

    public function serialize() {
        return serialize('Hello');
    }

    public function unserialize($data) {
        return unserialize($data);
    }
}

var_dump(unserialize(serialize(Foo::Bar)));

