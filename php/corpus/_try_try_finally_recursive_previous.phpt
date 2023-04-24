<?php
try {
    $e = new Exception("M1");
    try {
        throw new Exception("M2", 0, $e);
    } finally {
        throw $e;
    }
} finally {}
