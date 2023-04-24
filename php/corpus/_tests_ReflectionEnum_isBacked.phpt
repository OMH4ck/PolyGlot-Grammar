<?php

enum Enum_ {}
enum IntEnum: int {}
enum StringEnum: string {}

function test(): string {}

var_dump((new ReflectionEnum(Enum_::class))->isBacked());
var_dump((new ReflectionEnum(IntEnum::class))->isBacked());
var_dump((new ReflectionEnum(StringEnum::class))->isBacked());

