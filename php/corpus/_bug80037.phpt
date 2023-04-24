<?php

final class A
{
    public string $a;

    public static function fromArray(array $props): self
    {
        $me = new static;
        foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
        return $me;
    }

    public function __get($name)
    {
        throw new \LogicException("Property '$name' is not defined.");
    }
}

var_dump(A::fromArray(['a' => 'foo']));

