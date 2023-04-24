<?php

class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}

register_shutdown_function([new TrampolineTest(), 'shutdown']);
