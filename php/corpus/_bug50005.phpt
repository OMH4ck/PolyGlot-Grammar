<?php

class a extends exception {
    public function __construct() {
        $this->file = "";
    }
}

throw new a;

