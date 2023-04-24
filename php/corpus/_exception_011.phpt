<?php

define ("XXXXX", 1);
try {
    assert(false);
} catch (AssertionError $error) {
    echo "Caught\n";
}

