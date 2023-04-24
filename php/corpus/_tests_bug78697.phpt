<?php
trait T {}

try {
    (new ReflectionClass(new stdClass))->implementsInterface(T::class);
} catch (ReflectionException $e) {
    echo $e->getMessage();
}
