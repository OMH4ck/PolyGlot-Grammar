<?php
$reflection = new ReflectionZendExtension('Zend OPcache');
var_dump($reflection->getAuthor());
var_dump($reflection->getCopyright());
var_dump($reflection->getName());
var_dump($reflection->getURL());
var_dump($reflection->getVersion() === PHP_VERSION);
