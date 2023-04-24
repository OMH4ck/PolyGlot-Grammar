<?php
$a = [42];
foreach ($a as &$c) {
    // Make the array empty.
    unset($a[0]);
    // Destroy the array.
    $a = null;
}
?>
