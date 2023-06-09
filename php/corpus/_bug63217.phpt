<?php
class Test implements ArrayAccess {
    public function offsetExists($offset): bool {
        echo "offsetExists given ";
        var_dump($offset);
        return true;
    }
    public function offsetUnset($offset): void {
        echo "offsetUnset given ";
        var_dump($offset);
    }
    public function offsetSet($offset, $value): void {
        echo "offsetSet given ";
        var_dump($offset);
    }
    public function offsetGet($offset): mixed {
        echo "offsetGet given ";
        var_dump($offset);
        return null;
    }
}

$test = new Test;

/* These should all produce string(...) "..." output and not int(...) */
isset($test['0']);
isset($test['123']);
unset($test['0']);
unset($test['123']);
$test['0'] = true;
$test['123'] = true;
$foo = $test['0'];
$foo = $test['123'];

/* These caused the same bug, but in opcache rather than the compiler */
isset($test[(string)'0']);
isset($test[(string)'123']);
unset($test[(string)'0']);
unset($test[(string)'123']);
$test[(string)'0'] = true;
$test[(string)'123'] = true;
$foo = $test[(string)'0'];
$foo = $test[(string)'123'];

/**
 * @see https://github.com/php/php-src/pull/2607#issuecomment-313781748
 */
function test(): string {
    $array["10"] = 42;
    foreach ($array as $key => $value) {
        return $key;
    }
}

var_dump(test());

/**
 * Make sure we don't break arrays.
 */
$array = [];

$key = '123';

$array[$key] = 1;
$array['321'] = 2;
$array['abc'] = 3;

var_dump($array);

/**
 * Make sure that we haven't broken ArrayObject
 */
$ao = new ArrayObject();

$key = '123';

$ao = [];
$ao[$key] = 1;
$ao['321'] = 2;
$ao['abc'] = 3;

var_dump($ao);

