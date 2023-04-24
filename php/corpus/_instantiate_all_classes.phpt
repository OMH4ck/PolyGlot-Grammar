<?php

foreach (get_declared_classes() as $class) {
    try {
        new $class;
    } catch (Throwable) {}
}

?>
