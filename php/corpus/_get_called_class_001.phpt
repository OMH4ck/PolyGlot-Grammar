<?php

try {
    var_dump(get_called_class());
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

