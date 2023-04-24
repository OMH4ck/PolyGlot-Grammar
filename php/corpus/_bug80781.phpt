<?php

function handle(int $severity, string $message, string $file, int $line): bool {
	if((error_reporting() & $severity) !== 0) {
		throw new \ErrorException($message, 0, $severity, $file, $line);
	}

	return true; // stfu operator
}

set_error_handler('handle');

function getPlugin(string $plugin) : bool{
	return false;
}

$data = [];
$array = [];
if (isset($array[$data]) or getPlugin($data)) {

}

