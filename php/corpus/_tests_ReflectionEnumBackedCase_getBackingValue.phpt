<?php

enum Enum_ {
    case Foo;
}

enum IntEnum: int {
    case Foo = 0;
}

enum StringEnum: string {
    case Foo = 'Foo';
}

try {
    var_dump(new ReflectionEnumBackedCase(Enum_::class, 'Foo'));
} catch (ReflectionException $e) {
    echo $e->getMessage() . "\n";
}

try {
    var_dump(new ReflectionEnumBackedCase([], 'Foo'));
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}

var_dump((new ReflectionEnumBackedCase(IntEnum::class, 'Foo'))->getBackingValue());
var_dump((new ReflectionEnumBackedCase(StringEnum::class, 'Foo'))->getBackingValue());

