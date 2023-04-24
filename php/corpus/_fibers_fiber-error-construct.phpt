<?php

try {
    new FiberError;
} catch (Error $exception) {
    echo $exception->getMessage(), "\n";
}

