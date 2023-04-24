<?php

abstract class foo {
}

trait bar {

}

echo new ReflectionClass('foo'), "\n";
echo new ReflectionClass('bar'), "\n";

