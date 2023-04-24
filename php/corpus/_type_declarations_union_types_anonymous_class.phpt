<?php

$a = new class {
    public function testParam(self|string $a)
    {
    }
    public function test(): self|string
    {
        return new \stdClass;
    }
};

try {
    $a->testParam(null);
} catch (\Throwable $e) {
    echo $e->getMessage()."\n";
}

try {
    $a->test();
} catch (\Throwable $e) {
    echo $e->getMessage()."\n";
}
