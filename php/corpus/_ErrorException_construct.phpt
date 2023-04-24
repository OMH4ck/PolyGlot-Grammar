<?php

$e = new ErrorException();
var_dump($e->getMessage());
var_dump($e->getFile());
var_dump($e->getLine());

$e = new ErrorException("Second", 0, E_ERROR, null);
var_dump($e->getMessage());
var_dump($e->getFile());
var_dump($e->getLine());

$e = new ErrorException("Third", 0, E_ERROR, null, null);
var_dump($e->getMessage());
var_dump($e->getFile());
var_dump($e->getLine());

$e = new ErrorException("Forth", 0, E_ERROR, null, 123);
var_dump($e->getMessage());
var_dump($e->getFile());
var_dump($e->getLine());

$e = new ErrorException("Fifth", 0, E_ERROR, "abc.php");
var_dump($e->getMessage());
var_dump($e->getFile());
var_dump($e->getLine());

$e = new ErrorException("Sixth", 0, E_ERROR, "abc.php", null);
var_dump($e->getMessage());
var_dump($e->getFile());
var_dump($e->getLine());

$e = new ErrorException("Seventh", 0, E_ERROR, "abc.php", 123);
var_dump($e->getMessage());
var_dump($e->getFile());
var_dump($e->getLine());

