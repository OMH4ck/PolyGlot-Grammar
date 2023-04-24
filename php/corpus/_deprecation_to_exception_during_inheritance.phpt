<?php

set_error_handler(function($code, $message) {
    throw new Exception($message);
});

$class = new class extends DateTime {
    public function getTimezone() {}
};

