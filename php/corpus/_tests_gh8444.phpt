<?php

enum Foo
{
    case Bar;
}

class Bar
{
    public Foo $enum = Foo::Bar;
    public $enumInArray = [Foo::Bar];
}

echo new \ReflectionProperty('Bar', 'enum'), "\n";
echo new \ReflectionProperty('Bar', 'enumInArray'), "\n";

echo new \ReflectionProperty(new Bar, 'enum'), "\n";
echo new \ReflectionProperty(new Bar, 'enumInArray'), "\n";

