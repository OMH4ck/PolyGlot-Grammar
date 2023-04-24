<?php

class Inner {
    public int $prop = 1;
    public array $array = [];
}

class Test {
    public readonly Inner $prop;

    public function init() {
        $this->prop = new Inner();
    }
}

function r($test) {
    echo $test->prop->prop;
}

function w($test) {
    $test->prop->prop = 0;
    echo 'done';
}

function rw($test) {
    $test->prop->prop += 1;
    echo 'done';
}

function im($test) {
    $test->prop->array[] = 1;
    echo 'done';
}

function is($test) {
    echo (int) isset($test->prop->prop);
}

function us($test) {
    unset($test->prop->prop);
    echo 'done';
}

foreach ([true, false] as $init) {
    foreach (['r', 'w', 'rw', 'im', 'is', 'us'] as $op) {
        $test = new Test();
        if ($init) {
            $test->init();
        }

        echo 'Init: ' . ((int) $init) . ', op: ' . $op . ": ";
        try {
            $op($test);
        } catch (Error $e) {
            echo $e->getMessage();
        }
        echo "\n";
    }
}

