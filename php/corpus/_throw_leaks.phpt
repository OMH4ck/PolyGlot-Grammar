<?php

try {
    new stdClass(throw new Exception);
} catch (Exception $e) {
    echo "Caught\n";
}

try {
    $a = [];
    ($a + [1]) + throw new Exception;
} catch (Exception $e) {
    echo "Caught\n";
}

try {
    @throw new Exception;
} catch (Exception $e) {
    echo "Caught\n";
}
var_dump(error_reporting());

// Exit also unwinds and thus has the same basic problem.
new stdClass(exit);

