<?php
spl_autoload_register(function ($class) {
    throw new Exception("Failed");
});
try {
    array_map('A::b', []);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
