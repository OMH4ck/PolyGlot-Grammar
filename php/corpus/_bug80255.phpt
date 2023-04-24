<?php

function test($a, $b, $c) {
    do {
        if ($a && !$b) {
            break;
        } else if ($b) {
            echo "foo\n";
        }
        echo "bar\n";
    } while ($c);
    echo "baz\n";
}

test(true, true, false);

