<?php

try {
    global ${new stdClass};
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

