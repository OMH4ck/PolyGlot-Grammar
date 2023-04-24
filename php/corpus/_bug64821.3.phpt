<?php

class a extends exception {
    public function __construct() {
        $this->line = 0;
        $this->file = "";
    }
}

throw new a;

