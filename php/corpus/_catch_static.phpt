<?php

// This could in principle be supported, but isn't right now.
class Test {
    public function method() {
        try {
            foo();
        } catch (static $e) {}
    }
}

