<?php
try {
    throw new Exception();
} finally {
    echo "Done\n";
    exit();
}
