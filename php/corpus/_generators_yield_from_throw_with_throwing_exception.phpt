<?php

function gen() {
	yield from [1, 2, new class {
		function __destruct() {
			throw new Exception("dtor");
		}
	}];
}

gen()->throw(new Exception("outer"));

