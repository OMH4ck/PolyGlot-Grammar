<?php
$map = new WeakMap;
$obj = new stdClass;
$map[$obj] = new class {
    function __destruct() {
        throw new Exception("Test");
    }
};
