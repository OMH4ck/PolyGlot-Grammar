<?php
set_error_handler(function($code, $msg) {
	echo "Error: $msg\n";
    new class extends DateTime {
    };
});
new class extends DateTime {
    function getTimezone() {}
};
