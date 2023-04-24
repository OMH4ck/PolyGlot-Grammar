<?php

class MyDateTime extends DateTime
{
    /**
     * @return DateTime|false
     */
    #[ReturnTypeWillChange]
    public function modify(string $modifier) {
        return false;
    }
}

$date = new MyDateTime("2021-01-01 00:00:00");
var_dump($date->modify("+1 sec"));
