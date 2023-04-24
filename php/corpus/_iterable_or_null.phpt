<?php

try {
	  var_dump(zend_iterable("string"));
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

try {
	  var_dump(zend_iterable(1));
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

try {
	  var_dump(zend_iterable(null));
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}


zend_iterable([]);
zend_iterable([], []);

$iterator = new ArrayIterator([]);
zend_iterable($iterator);
zend_iterable($iterator, $iterator);
zend_iterable($iterator, null);

try {
	  var_dump(zend_iterable([], "string"));
} catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
}

