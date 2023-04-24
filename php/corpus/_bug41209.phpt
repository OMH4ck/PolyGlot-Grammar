<?php

class env
{
    public function __construct()
    {
        set_error_handler(array(__CLASS__, 'errorHandler'));
    }

    public static function errorHandler($errno, $errstr, $errfile, $errline)
    {
        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
    }
}

class cache implements ArrayAccess
{
    private $container = array();

    public function offsetGet($id): mixed {}

    public function offsetSet($id, $value): void {}

    public function offsetUnset($id): void {}

    public function offsetExists($id): bool
    {
        return isset($this->containers[(string) $id]);
    }
}

$env = new env();
$cache = new cache();
var_dump(isset($cache[$id]));

echo "Done\n";
