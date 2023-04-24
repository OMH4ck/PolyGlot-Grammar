<?php

function foo() {
}

class bar {
    private function foo() {
    }
}

echo new ReflectionFunction('foo'), "\n";
echo new ReflectionMethod('bar', 'foo'), "\n";
