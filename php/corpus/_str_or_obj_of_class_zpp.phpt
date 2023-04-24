<?php

class Foo {}
class ToString {
    public function __toString() {
        return "ToString";
    }
}

var_dump(zend_string_or_stdclass("string"));
var_dump(zend_string_or_stdclass(1));
var_dump(zend_string_or_stdclass(null));
var_dump(zend_string_or_stdclass(new stdClass()));
var_dump(zend_string_or_stdclass(new ToString()));

try {
    zend_string_or_stdclass([]);
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

try {
    zend_string_or_stdclass(new Foo());
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

var_dump(zend_string_or_stdclass_or_null("string"));
var_dump(zend_string_or_stdclass_or_null(1));
var_dump(zend_string_or_stdclass_or_null(null));
var_dump(zend_string_or_stdclass_or_null(new stdClass()));
var_dump(zend_string_or_stdclass_or_null(new ToString()));

try {
    zend_string_or_stdclass_or_null([]);
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

try {
    zend_string_or_stdclass_or_null(new Foo());
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

