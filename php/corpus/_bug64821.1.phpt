<?php

#[AllowDynamicProperties]
class a extends exception {
    public function __construct() {
        $this->message = NULL;
        $this->string  = NULL;
        $this->code    = array();
        $this->line = 0;
    }
}

throw new a;

