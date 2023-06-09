<?php

class Alpha {
    public $message = "Valid representation";

    public function bravo() {
        return $this->message;
    }
}

$alpha = new Alpha();

echo "alpha.bravo:                   ", $alpha->bravo().PHP_EOL;

$reflection = new ReflectionObject($alpha);

$method = $reflection->getMethod("bravo");
$closure = $method->getClosure($alpha);

$reflectionC = new ReflectionFunction($closure);

echo "reflection of alpha.bravo:     ", $method->invoke($alpha).PHP_EOL;
echo "closure of alpha.bravo:        ", $closure().PHP_EOL;
echo "call_user_func of closure:     ", call_user_func($closure).PHP_EOL;
echo PHP_EOL;
echo "closure cl of c(alpha.bravo):  ", get_class($reflectionC->getClosureThis()).PHP_EOL;
echo "scope cl of c(alpha.bravo):    ", $reflectionC->getClosureScopeClass()->getName().PHP_EOL;
echo "reflection of c(alpha.bravo):  ", $reflectionC->invoke().PHP_EOL;

