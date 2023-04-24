<?php
set_error_handler(function($code, $msg){
	echo "Err: $msg\n";
    $GLOBALS['a']=null;
});
$a = new class{};
try {
    [&$a->y];
} catch (Throwable $ex) {
	echo "Exception: " .$ex->getMessage() . "\n";
}
