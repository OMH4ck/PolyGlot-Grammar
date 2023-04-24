<?php
try {
    new ReflectionZendExtension('zend_opcache');
} catch (ReflectionException $e) {
    echo $e->getMessage();
}

