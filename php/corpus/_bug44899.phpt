<?php

class myclass
{
    private $_data = array();

    function __construct($data)
    {
        $this->_data = $data;
    }

    function __isset($field_name)
    {
        return isset($this->_data[$field_name]);
    }
}

$arr = array('foo' => '');

$myclass = new myclass($arr) ;

echo (isset($myclass->foo)) ? 'isset' : 'not isset';
echo "\n";
echo (empty($myclass->foo)) ? 'empty' : 'not empty';
echo "\n";
echo ($myclass->foo) ? 'not empty' : 'empty';
echo "\n";

