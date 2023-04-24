<?php
class MemoryLeak
{
    public function __construct()
    {
        $this->things[] = $this;
    }

    public function __destruct()
    {
        $this->things[] = null;
    }

    private $things = [];
}

ini_set('memory_limit', '20M');

for ($i = 0; $i < 100000; ++$i) {
    $obj = new MemoryLeak();
}
echo "OK\n";
