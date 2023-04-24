<?php

$db = new PDO('sqlite::memory:');
$st = $db->query('SELECT 1');
try {
    $re = $st->fetchObject('%Z');
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
