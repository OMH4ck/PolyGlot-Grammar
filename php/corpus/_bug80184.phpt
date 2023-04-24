<?php

$callbacks = [
	function () { echo "First item!\n"; },
	function () { echo "Second item!\n"; },
	function () { echo "Third item!\n"; },
	function () { echo "Fourth item!\n"; },
];

while ($callback = array_shift($callbacks) and ($callback() || true));

