<?php


class bar {
    public $z;

    public function __construct() {
        $this->z = new stdclass;
    }
    public function getZ() {
        return $this->z;
    }
}

var_dump(clone (new bar)->z);
var_dump(clone (new bar)->getZ());

