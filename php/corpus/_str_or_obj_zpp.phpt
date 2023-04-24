<?php

class Foo {}

var_dump(zend_string_or_object("string"));
var_dump(zend_string_or_object(1));
var_dump(zend_string_or_object(null));
var_dump(zend_string_or_object(new stdClass()));
var_dump(zend_string_or_object(new Foo()));

try {
    zend_string_or_object([]);
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

var_dump(zend_string_or_object_or_null("string"));
var_dump(zend_string_or_object_or_null(1));
var_dump(zend_string_or_object_or_null(null));
var_dump(zend_string_or_object_or_null(new stdClass()));
var_dump(zend_string_or_object_or_null(new Foo()));

try {
    zend_string_or_object_or_null([]);
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

