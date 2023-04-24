<?php

class Test {
    public int $prop;

    public function method() {
        // Opcache merges cache slots for both assignments.
        $this->prop = 1;
        try {
            $this->prop = "foobar";
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
        var_dump($this->prop);
    }
}

$test = new Test;
$test->method();
$test->method();

